<?php

namespace Spot\Shipment\Excel\Concerns;

interface WithHeadings
{
    /**
     * @return array
     */
    public function headings(): array;
}
