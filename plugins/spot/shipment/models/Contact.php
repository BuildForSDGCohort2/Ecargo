<?php namespace Spot\Shipment\Models;

use Model;

/**
 * Model
 */
class Contact extends Model
{
    use \October\Rain\Database\Traits\Validation;

    use \October\Rain\Database\Traits\SoftDelete;

    

    use \Jacob\Logbook\Traits\LogChanges;
    public $logBookModelName = 'Contact';
    protected $deleteLogbookAfterDelete = false;
    public $logBookLogUndoable = true;
    
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
            'key'   =>  'user_id',
        ],
    ];

    /**
     * @var string The database table used by the model.
     */
    public $table = 'user_contact';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
