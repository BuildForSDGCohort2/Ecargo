<?php namespace spot\Container\Models;

use Model;

/**
 * Model
 */
class Customer extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_container_customer';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
