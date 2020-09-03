<?php namespace Spot\Shipment\Models;

use Model;

/**
 * Model
 */
class Notes extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \Jacob\Logbook\Traits\LogChanges;
    public $logBookModelName = 'Note';
    protected $deleteLogbookAfterDelete = false;
    public $logBookLogUndoable = true;
    protected $ignoreFieldsLogbook = [
        'created_at',
        'updated_at',
    ];
    public static function changeLogBookDisplayColumn($column)
    {
        switch ($column) {
            case 'item_id':
                $value = $this['theme_lang']['order'];
                break;
            case 'user_id':
                $value = $this['theme_lang']['user'];
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
            case 'user_id':
                $value = \RainLab\User\Models\User::find($value)->name;
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
            'key' =>    'item_id',
        ],
        'client' => [
            '\RainLab\User\Models\User',
            'key' =>    'item_id',
        ],
        'employee' => [
            '\RainLab\User\Models\User',
            'key' =>    'item_id',
        ],
        'user' => [
            '\RainLab\User\Models\User',
        ],
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_shipment_notes';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
