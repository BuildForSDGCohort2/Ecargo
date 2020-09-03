<?php namespace Spot\Shipment\Models;

use Model;

/**
 * Model
 */
class Address extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    use \Jacob\Logbook\Traits\LogChanges;
    public $logBookModelName = 'Address';
    protected $deleteLogbookAfterDelete = false;
    public $logBookLogUndoable = true;
    protected $ignoreFieldsLogbook = [
        'url',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public static function changeLogBookDisplayColumn($column)
    {
        switch ($column) {
            case 'user_id':
                $value = $this['theme_lang']['customer'];
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
            case 'default':
                if($value == 0){
                    $value = $this['theme_lang']['no'];
                }elseif($value == 1){
                    $value = $this['theme_lang']['yes'];
                }
                break;
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
        'user' => [
            '\RainLab\User\Models\User',
        ],
        'thecountry' => [
            '\RainLab\Location\Models\Country',
            'key'   =>  'country',
        ],
        'thestate' => [
            '\RainLab\Location\Models\State',
            'key'   =>  'state',
        ],
        'thecity' => [
            '\Spot\Shipment\Models\City',
            'key'   =>  'city',
        ],
        'area' => [
            '\Spot\Shipment\Models\Area',
            'key'   =>  'county',
        ],
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_shipment_address';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
