<?php

namespace Spot\Shipment\Excel\Concerns;

interface WithBatchInserts
{
    /**
     * @return int
     */
    public function batchSize(): int;
}
