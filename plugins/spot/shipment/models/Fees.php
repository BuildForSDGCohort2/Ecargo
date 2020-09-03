<?php namespace Spot\Shipment\Models;

use Model;

/**
 * Model
 */
class Fees extends Model
{
    use \October\Rain\Database\Traits\Validation;

    protected $jsonable = ['packaging_fees'];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_shipment_fees';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'area_from' => [
            '\Spot\Shipment\Models\Area',
            'key'   =>  'from',
        ],
        'area_to' => [
            '\Spot\Shipment\Models\Area',
            'key'   =>  'to',
        ],
        'city_from' => [
            '\Spot\Shipment\Models\City',
            'key'   =>  'from',
        ],
        'city_to' => [
            '\Spot\Shipment\Models\City',
            'key'   =>  'to',
        ],
        'state_from' => [
            '\RainLab\Location\Models\State',
            'key'   =>  'from',
        ],
        'state_to' => [
            '\RainLab\Location\Models\State',
            'key'   =>  'to',
        ],
        'country_from' => [
            '\RainLab\Location\Models\Country',
            'key'   =>  'from',
        ],
        'country_to' => [
            '\RainLab\Location\Models\Country',
            'key'   =>  'to',
        ],
    ];
}
