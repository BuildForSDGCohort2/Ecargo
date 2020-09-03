<?php namespace Spot\Shipment\Classes;



use Spot\Shipment\Classes\ShipmentImport;
use \Maatwebsite\Excel\Facades\Excel;

class ExcelFile  
{
    public static function import($fileName) 
    {
        Excel::import(new ShipmentImport, request()->file($fileName));

        var_dump ("success");
        die();
        
        
    }
}