<?php namespace Spot\Shipment\Models;

use Model;
use Lang;

/**
 * Model
 */
class Office extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['name'];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_shipment_office';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

   public $belongsTo = [
       'manager' => [
           '\RainLab\User\Models\User',
           'key'    =>  'manger_id',
       ],
       'responsible' => [
           '\RainLab\User\Models\User',
           'key'    =>  'responsible_id',
       ],
    ];
   public $hasOne = [
       'treasury' => [
           '\Spot\Shipment\Models\Treasury',
       ],
    ];
}
