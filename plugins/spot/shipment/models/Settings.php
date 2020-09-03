<?php namespace Spot\Shipment\Models;

use Model;

/**
 * Model
 */
class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'acme_demo_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

    public $attachOne = [
        'logo' => \System\Models\File::class,
        'mobile_logo' => \System\Models\File::class,
        'favicon' => \System\Models\File::class
    ];
}
