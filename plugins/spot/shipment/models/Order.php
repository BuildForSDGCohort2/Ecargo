<?php namespace Spot\Shipment\Models;

use Model;

/**
 * Model
 */
class Order extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];

    use \Jacob\Logbook\Traits\LogChanges;
    public $logBookModelName = 'Order';
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
            case 'office_id':
                $value = $this['theme_lang']['office'];
                break;
            case 'sender_id':
                $value = $this['theme_lang']['sender'];
                break;
            case 'sender_address_id':
                $value = $this['theme_lang']['sender_address'];
                break;
            case 'receiver_id':
                $value = $this['theme_lang']['receiver'];
                break;
            case 'receiver_address_id':
                $value = $this['theme_lang']['receiver_address'];
                break;
            case 'packaging_id':
                $value = $this['theme_lang']['packaging'];
                break;
            case 'courier_id':
                $value = $this['theme_lang']['courier'];
                break;
            case 'delivery_time_id':
                $value = $this['theme_lang']['delivery_time'];
                break;
            case 'mode_id':
                $value = $this['theme_lang']['mode'];
                break;
            case 'status_id':
                $value = $this['theme_lang']['status'];
                break;
            case 'currency_id':
                $value = $this['theme_lang']['currency'];
                break;
            case 'manifest_id':
                $value = $this['theme_lang']['manifest'];
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
            case 'office_id':
                $value = \Spot\Shipment\Models\Office::find($value)->name;
                break;
            case 'sender_id':
                $value = \RainLab\User\Models\User::find($value)->name;
                break;
            case 'sender_address_id':
                $value = \Spot\Shipment\Models\Address::find($value)->name;
                break;
            case 'receiver_id':
                $value = \RainLab\User\Models\User::find($value)->name;
                break;
            case 'receiver_address_id':
                $value = \Spot\Shipment\Models\Address::find($value)->name;
                break;
            case 'packaging_id':
                $value = \Spot\Shipment\Models\Packaging::find($value)->name;
                break;
            case 'courier_id':
                $value = \Spot\Shipment\Models\Courier::find($value)->name;
                break;
            case 'delivery_time_id':
                $value = \Spot\Shipment\Models\DeliveryTime::find($value)->name;
                break;
            case 'mode_id':
                $value = \Spot\Shipment\Models\Mode::find($value)->name;
                break;
            case 'status_id':
                $value = \Spot\Shipment\Models\Status::find($value)->name;
                break;
            case 'manifest_id':
                $value = \Spot\Shipment\Models\Manifest::find($value)->name;
                break;
            case 'currency_id':
                $value = \Responsiv\Currency\Models\Currency::find($value)->name;
                break;
        }
        return $value;
    }

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'office' => [
            '\Spot\Shipment\Models\Office',
        ],
        'delivered_employee' => [
            '\RainLab\User\Models\User',
            'key'   =>  'delivered_by',
        ],
        'delivered_responsiabality' => [
            '\RainLab\User\Models\User',
            'key'   =>  'delivered_responsiable',
        ],
        'sender' => [
            '\RainLab\User\Models\User',
            'key'   =>  'sender_id',
        ],
        'responsiable' => [
            '\RainLab\User\Models\User',
            'key'   =>  'assigned_id',
        ],
        'sender_address' => [
            '\Spot\Shipment\Models\Address',
            'key'   =>  'sender_address_id',
        ],
        'receiver' => [
            '\RainLab\User\Models\User',
            'key'   =>  'receiver_id',
        ],
        'receiver_address' => [
            '\Spot\Shipment\Models\Address',
            'key'   =>  'receiver_address_id',
        ],
        'packaging' => [
            '\Spot\Shipment\Models\Packaging',
        ],
        'courier' => [
            '\Spot\Shipment\Models\Courier',
        ],
        'label' => [
            '\Spot\Shipment\Models\Label',
        ],
        'handler' => [
            '\Spot\Shipment\Models\Handler',
        ],
        'breakdown' => [
            '\Spot\Shipment\Models\Breakdown',
        ],
        'mode' => [
            '\Spot\Shipment\Models\Mode',
        ],
        'status' => [
            '\Spot\Shipment\Models\Status',
        ],
        'currency' => [
            '\Responsiv\Currency\Models\Currency',
        ],
        'manifest' => [
            '\Spot\Shipment\Models\Manifest',
        ],
        'deliverytime' => [
            '\Spot\Shipment\Models\DeliveryTime',
            'key'   =>  'delivery_time_id',
        ],
    ];
   public $hasMany = [
       'items' => [
           '\Spot\Shipment\Models\Item',
           'delete' => true
       ],
       'tasks' => [
           '\Spot\Shipment\Models\Task',
           'delete' => true
       ],
       'activities' => [
           '\Spot\Shipment\Models\Activity',
           'order'    =>  'id DESC',
           'delete' => true
       ],
       'payments' => [
           '\Spot\Shipment\Models\Payment',
           'key'    =>  'item_id',
           'order'    =>  'id DESC',
           'delete' => true
       ],
       'notes' => [
           '\Spot\Shipment\Models\Notes',
           'key'    =>  'item_id',
           'conditions'    =>  'item_type = 1',
           'order'    =>  'id DESC',
           'delete' => true
       ],
       'histories' => [
           '\Spot\Shipment\Models\HistoryOrder',
           'delete' => true
       ],
    ];

    public $attachOne = [
        'id_copy' => \System\Models\File::class,
        'package_before' => \System\Models\File::class
    ];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_shipment_order';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
