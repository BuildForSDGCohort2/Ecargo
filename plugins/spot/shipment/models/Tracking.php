<?php namespace Spot\Shipment\Models;

use Model;

/**
 * Model
 */
class Tracking extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_shipment_activity';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
