<?php

namespace Spot\Shipment\Excel\Concerns;

interface WithEvents
{
    /**
     * @return array
     */
    public function registerEvents(): array;
}
