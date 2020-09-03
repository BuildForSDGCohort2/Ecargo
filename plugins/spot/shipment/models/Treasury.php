<?php namespace Spot\Shipment\Models;

use Model;
use Lang;

/**
 * Model
 */
class Treasury extends Model
{
    use \October\Rain\Database\Traits\Validation;

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['name'];

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    use \Jacob\Logbook\Traits\LogChanges;
    public $logBookModelName = 'Treasury';
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
            case 'office_id':
                $value = $this['theme_lang']['office'];
                break;
        }
        return $value;
    }
    public static function changeLogBookDisplayValue($column, $value)
    {
        switch ($column) {
            case 'office_id':
                $value = \Spot\Shipment\Models\Office::find($value)->name;
                break;
        }
        return $value;
    }


    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_shipment_treasury';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'office' => [
            '\Spot\Shipment\Models\Office',
        ],
    ];
   public $hasMany = [
       'payments' => [
           '\Spot\Shipment\Models\Payment',
       ],
    ];
}
