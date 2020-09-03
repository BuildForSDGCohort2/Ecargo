<?php

namespace Spot\Shipment\Excel\Concerns;

use Illuminate\Contracts\View\View;

interface FromView
{
    /**
     * @return View
     */
    public function view(): View;
}
