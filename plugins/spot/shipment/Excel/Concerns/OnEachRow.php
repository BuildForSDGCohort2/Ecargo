<?php

namespace Spot\Shipment\Excel\Concerns;

use Spot\Shipment\Excel\Row;

interface OnEachRow
{
    /**
     * @param Row $row
     */
    public function onRow(Row $row);
}
