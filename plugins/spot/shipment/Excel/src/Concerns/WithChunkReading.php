<?php

namespace Spot\Shipment\Excel\Concerns;

interface WithChunkReading
{
    /**
     * @return int
     */
    public function chunkSize(): int;
}
