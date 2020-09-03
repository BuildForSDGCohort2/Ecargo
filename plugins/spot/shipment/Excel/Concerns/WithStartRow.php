<?php

namespace Spot\Shipment\Excel\Concerns;

interface WithStartRow
{
    /**
     * @return int
     */
    public function startRow(): int;
}
