<?php namespace Spot\Shipment\Models;

use Model;
use Lang;

/**
 * Model
 */
class Item extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    use \Jacob\Logbook\Traits\LogChanges;
    public $logBookModelName = 'Item';
    protected $deleteLogbookAfterDelete = false;
    public $logBookLogUndoable = true;
    protected $ignoreFieldsLogbook = [
        'deleted_at',
    ];
    public static function changeLogBookDisplayColumn($column)
    {
        switch ($column) {
            case 'order_id':
                $value = $this['theme_lang']['order'];
                break;
            case 'category_id':
                $value = $this['theme_lang']['category'];
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
            case 'category_id':
                $value = \Spot\Shipment\Models\Category::find($value)->name;
                break;
        }
        return $value;
    }

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'order' => [
            '\Spot\Shipment\Models\Order',
        ],
        'category' => [
            '\Spot\Shipment\Models\Category',
        ],
    ];

    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_shipment_item';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
