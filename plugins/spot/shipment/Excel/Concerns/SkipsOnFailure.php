<?php

namespace Spot\Shipment\Excel\Concerns;

use Spot\Shipment\Excel\Validators\Failure;

interface SkipsOnFailure
{
    /**
     * @param Failure[] $failures
     */
    public function onFailure(Failure ...$failures);
}
