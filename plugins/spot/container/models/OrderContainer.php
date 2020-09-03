<?php namespace spot\Container\Models;



use Model;



/**

 * Model

 */

class OrderContainer extends Model

{

    use \October\Rain\Database\Traits\Validation;

    

    use \October\Rain\Database\Traits\SoftDelete;



    protected $dates = ['deleted_at'];



    use \Jacob\Logbook\Traits\LogChanges;

    public $logBookModelName = 'OrderContainer';

    protected $deleteLogbookAfterDelete = false;

    public $logBookLogUndoable = true;



    // public static function changeLogBookDisplayColumn($column)

    // {

    //     switch ($column) {

            

    //         case 'status':

    //             $value = 'status';//$this['theme_lang']['status'];

    //             break;

    //         case 'customer_id':

    //             $value = 'customer'//$this['theme_lang']['sender'];

    //             break;    

    //     }

    //     return $value;

    // }

    // public static function changeLogBookDisplayValue($column, $value)

    // {

    //     switch ($column) {

    //         case 'status':

    //             $value = \Spot\Shipment\Models\Status::find($value)->name;

    //             break;

    //         case 'customer_id':

    //             $value = \RainLab\User\Models\User::find($value)->name;

    //             break;    

    //     }

    //     return $value;

    // }



     /**

     * @var array Relations

     */

    public $belongsTo = [

        'status' => [

            '\Spot\Container\Models\Status',

        ],

        'customer' => [

            '\RainLab\User\Models\User',

            'key'   =>  'customer_id',

        ],

        'courier' => [

            '\Spot\Shipment\Models\Courier',
            'key' => 'company_id',

        ],

        'customer_address' => [

            '\Spot\Shipment\Models\Address',

            'key'   =>  'customer_address_id',

        ],

        'location' => [

            '\Spot\Container\Models\Location',
            'key' => 'location_type',

        ],

        'destination_container' => [

            '\Spot\Container\Models\Destination',
            'key' => 'destination'

        ],
        'reason' => [

            '\Spot\Container\Models\Reasonarrival',
            'key' => 'reason_for_arrive'

        ],

    ];



     public $hasOne = [

       'details' => [

           '\Spot\Container\Models\DetailContainer',

           'key'    =>  'container_id',

           'container'    =>  'id DESC',

           'delete' => true

       ],

    ];



    /**

     * @var string The database table used by the model.

     */

    public $table = 'spot_container_order';



    /**

     * @var array Validation rules

     */

    public $rules = [

    ];

}

