<?php namespace Spot\Shipment\Models;

use Model;

/**
 * Model
 */
class Employeeorder extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_shipment_employee_order';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'order' => [
            '\Spot\Shipment\Models\Order',
        ],
        'employee' => [
            '\RainLab\User\Models\User',
            'key'   =>  'employee_id',
            //'conditions' => 'type = 1'
        ],
    ];
}
