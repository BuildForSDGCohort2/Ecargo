<?php namespace Spot\Shipment\Classes;


use Spot\Shipment\Models\Order;
use Spot\Shipment\Models\Item;
use Spot\Shipment\Models\Payment;
use Illuminate\Support\Collection;
use \Maatwebsite\Excel\Concerns\ToCollection;

class ShipmentImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            Order::create([
                'ship_date' => $row[0],
            ]);
        }
    }
}