<?php namespace Spot\Shipment\Models;

use Model;
use Lang;

/**
 * Model
 */
class Car extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['name','description'];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_shipment_car';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'driver' => [
            '\RainLab\User\Models\User',
            'key'   =>  'driver_id'
        ],
        'responsible' => [
            '\RainLab\User\Models\User',
            'key'   =>  'responsible_id'
        ],
        'transport' => [

            '\Spot\Shipment\Models\Mode',
            'key' => 'transport_id',

        ],
        'destination' => [

            '\Spot\Container\Models\Destination',
            'key' => 'destination_id'
        ],
    ];
}
