<?php

namespace Spot\Shipment\Excel\Concerns;

use Iterator;

interface FromIterator
{
    /**
     * @return Iterator
     */
    public function iterator(): Iterator;
}
