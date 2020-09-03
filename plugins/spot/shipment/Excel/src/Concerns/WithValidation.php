<?php

namespace Spot\Shipment\Excel\Concerns;

interface WithValidation
{
    /**
     * @return array
     */
    public function rules(): array;
}
