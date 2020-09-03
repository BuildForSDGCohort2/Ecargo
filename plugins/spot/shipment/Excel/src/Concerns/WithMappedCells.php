<?php

namespace Spot\Shipment\Excel\Concerns;

interface WithMappedCells
{
    /**
     * @return array
     */
    public function mapping(): array;
}
