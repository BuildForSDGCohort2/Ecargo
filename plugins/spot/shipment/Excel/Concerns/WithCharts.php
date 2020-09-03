<?php

namespace Spot\Shipment\Excel\Concerns;

use PhpOffice\PhpSpreadsheet\Chart\Chart;

interface WithCharts
{
    /**
     * @return Chart|Chart[]
     */
    public function charts();
}
