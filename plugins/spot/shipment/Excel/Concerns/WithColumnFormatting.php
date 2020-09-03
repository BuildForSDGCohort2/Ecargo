<?php

namespace Spot\Shipment\Excel\Concerns;

interface WithColumnFormatting
{
    /**
     * @return array
     */
    public function columnFormats(): array;
}
