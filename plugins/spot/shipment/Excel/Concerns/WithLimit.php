<?php

namespace Spot\Shipment\Excel\Concerns;

interface WithLimit
{
    /**
     * @return int
     */
    public function limit(): int;
}
