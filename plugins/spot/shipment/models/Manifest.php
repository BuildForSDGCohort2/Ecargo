<?php namespace Spot\Shipment\Models;

use Model;

/**
 * Model
 */
class Manifest extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    use \Jacob\Logbook\Traits\LogChanges;
    public $logBookModelName = 'Order';
    protected $deleteLogbookAfterDelete = false;
    public $logBookLogUndoable = true;
    protected $ignoreFieldsLogbook = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public static function changeLogBookDisplayColumn($column)
    {
        switch ($column) {
            case 'car_id':
                $value = $this['theme_lang']['car'];
                break;
            case 'driver_id':
                $value = $this['theme_lang']['driver'];
                break;
            case 'user_id':
                $value = $this['theme_lang']['delegate'];
                break;
            case 'employee_id':
                $value = $this['theme_lang']['employee'];
                break;
            default:
                $value = $this['theme_lang'][$column];
                break;
        }
        return $value;
    }
    public static function changeLogBookDisplayValue($column, $value)
    {
        switch ($column) {
            case 'car_id':
                $value = \Spot\Shipment\Models\Car::find($value)->name;
                break;
            case 'user_id':
                $value = \RainLab\User\Models\User::find($value)->name;
                break;
            case 'employee_id':
                $value = \RainLab\User\Models\User::find($value)->name;
                break;
            case 'driver_id':
                $value = \RainLab\User\Models\User::find($value)->name;
                break;
        }
        return $value;
    }

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'car' => [
            '\Spot\Shipment\Models\Car',
        ],
        'driver' => [
            '\RainLab\User\Models\User',
            'key'   =>  'driver_id',
        ],
        'employee' => [
            '\RainLab\User\Models\User',
            'key'   =>  'employee_id',
        ],
        'user' => [
            '\RainLab\User\Models\User',
        ],
    ];
   public $hasMany = [
       'orders' => [
           '\Spot\Shipment\Models\Order',
       ],
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_shipment_manifest';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
