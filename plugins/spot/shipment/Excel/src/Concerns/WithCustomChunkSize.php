<?php

namespace Spot\Shipment\Excel\Concerns;

interface WithCustomChunkSize
{
    /**
     * @return int
     */
    public function chunkSize(): int;
}
