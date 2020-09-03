<?php namespace spot\Container\Models;

use Model;

/**
 * Model
 */
class Location extends Model
{
    use \October\Rain\Database\Traits\Validation;
    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];
    public $translatable = ['name','location_desc'];
    
    /*
     * Disable timestamps by default.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'spot_container_location';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
