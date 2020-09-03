<?php

namespace Spot\Shipment\Excel\Concerns;

use Illuminate\Console\OutputStyle;

interface WithProgressBar
{
    /**
     * @return OutputStyle
     */
    public function getConsoleOutput(): OutputStyle;
}
