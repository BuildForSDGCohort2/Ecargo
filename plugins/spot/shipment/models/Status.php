<?php namespace Spot\Shipment\Models;

use Model;
use Lang;

/**
 * Model
 */
class Status extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['name','description'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_shipment_status';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
