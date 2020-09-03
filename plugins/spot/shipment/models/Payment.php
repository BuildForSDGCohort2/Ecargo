<?php namespace Spot\Shipment\Models;

use Model;

/**
 * Model
 */
class Payment extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    use \Jacob\Logbook\Traits\LogChanges;
    public $logBookModelName = 'Payment';
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
            case 'type':
                $value = $this['theme_lang']['payment_for'];
                break;
            case 'for_id':
                $value = $this['theme_lang']['for'];
                break;
            case 'movement':
                $value = $this['theme_lang']['movement_type'];
                break;
            case 'other':
                $value = $this['theme_lang']['movement_type'];
                break;
            case 'item_id':
                $value = $this['theme_lang']['workorder'];
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
            case 'type':
                switch ($value) {
                    case 1:
                        $value  =   $this['theme_lang']['user'];
                        break;
                    case 2:
                        $value  =   $this['theme_lang']['branch'];
                        break;
                }
                $value = \RainLab\User\Models\User::find($value)->name;
                break;
            case 'movement':
                switch ($value) {
                    case 1:
                        $value  =   $this['theme_lang']['withdrawl'];
                        break;
                    case 2:
                        $value  =   $this['theme_lang']['deposit'];
                        break;
                    case 3:
                        $value  =   $this['theme_lang']['deduction_wallet'];
                        break;
                    case 4:
                        $value  =   $this['theme_lang']['addition_wallet'];
                        break;
                    case 5:
                        $value  =   $this['theme_lang']['deduction_commission'];
                        break;
                    case 6:
                        $value  =   $this['theme_lang']['addition_commission'];
                        break;
                    case 7:
                        $value  =   $this['theme_lang']['deduction_packages'];
                        break;
                    case 8:
                        $value  =   $this['theme_lang']['addition_packages'];
                        break;
                }
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
            'key'   =>  'item_id',
            'delete'    =>   true,
        ],
        'branch' => [
            '\Spot\Shipment\Models\Office',
            'key'   =>  'for_id',
            //'conditions' => 'type = 2'
        ],
        'user' => [
            '\RainLab\User\Models\User',
            'key'   =>  'for_id',
            //'conditions' => 'type = 1'
        ],
        'gotit' => [
            '\RainLab\User\Models\User',
            'key'   =>  'payment_with',
        ],
        'treasury' => [
            '\Spot\Shipment\Models\Treasury',
        ],
    ];



    /**
     * Scope a query to only include active users.
     */
    public function scopeUser($query)
    {
        return $query->where('type', 1);
    }
    public function scopeUserwallet($query)
    {
        return $query->where('type', 1)->where(function($q){$q->whereIn('movement', [1,2,3,4]);});
    }
    public function scopeBranch($query)
    {
        return $query->where('type', 2);
    }

    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_shipment_payment';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
