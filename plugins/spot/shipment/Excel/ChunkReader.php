<?php

namespace Spot\Shipment\Excel;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Spot\Shipment\Excel\Concerns\WithChunkReading;
use Spot\Shipment\Excel\Concerns\WithEvents;
use Spot\Shipment\Excel\Concerns\WithLimit;
use Spot\Shipment\Excel\Concerns\WithProgressBar;
use Spot\Shipment\Excel\Events\BeforeImport;
use Spot\Shipment\Excel\Files\TemporaryFile;
use Spot\Shipment\Excel\Imports\HeadingRowExtractor;
use Spot\Shipment\Excel\Jobs\AfterImportJob;
use Spot\Shipment\Excel\Jobs\QueueImport;
use Spot\Shipment\Excel\Jobs\ReadChunk;
use Throwable;

class ChunkReader
{
    /**
     * @param  WithChunkReading  $import
     * @param  Reader  $reader
     * @param  TemporaryFile  $temporaryFile
     *
     * @return \Illuminate\Foundation\Bus\PendingDispatch|null
     */
    public function read(WithChunkReading $import, Reader $reader, TemporaryFile $temporaryFile)
    {
        if ($import instanceof WithEvents && isset($import->registerEvents()[BeforeImport::class])) {
            $reader->beforeImport($import);
        }

        $chunkSize  = $import->chunkSize();
        $totalRows  = $reader->getTotalRows();
        $worksheets = $reader->getWorksheets($import);

        if ($import instanceof WithProgressBar) {
            $import->getConsoleOutput()->progressStart(array_sum($totalRows));
        }

        $jobs = new Collection();
        foreach ($worksheets as $name => $sheetImport) {
            $startRow         = HeadingRowExtractor::determineStartRow($sheetImport);
            $totalRows[$name] = $sheetImport instanceof WithLimit ? $sheetImport->limit() : $totalRows[$name];

            for ($currentRow = $startRow; $currentRow <= $totalRows[$name]; $currentRow += $chunkSize) {
                $jobs->push(new ReadChunk(
                    $import,
                    $reader->getPhpSpreadsheetReader(),
                    $temporaryFile,
                    $name,
                    $sheetImport,
                    $currentRow,
                    $chunkSize
                ));
            }
        }

        $jobs->push(new AfterImportJob($import, $reader));

        if ($import instanceof ShouldQueue) {
            return QueueImport::withChain($jobs->toArray())->dispatch($import);
        }

        $jobs->each(function ($job) {
            try {
                dispatch_now($job);
            } catch (Throwable $e) {
                if (method_exists($job, 'failed')) {
                    $job->failed($e);
                }
                throw $e;
            }
        });

        if ($import instanceof WithProgressBar) {
            $import->getConsoleOutput()->progressFinish();
        }

        unset($jobs);

        return null;
    }
}
