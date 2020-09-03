<?php namespace Spot\Shipment;

use System\Classes\PluginBase;
use \Spot\Shipment\Models\Settings;
use RainLab\Translate\Classes\Translator;
use Cms\Classes\Theme;
use \RainLab\User\Models\User as UserModel;
use \Responsiv\Currency\Models\Currency as CurrencyModel;

class Plugin extends PluginBase
{
    /**
     * @var array Plugin dependencies
     */
    public $require = ['Spot.UserPermissions'];

    public function boot()
    {
        if (!Settings::get('company') || Settings::get('company') == null){

            $default_settings   =   array(
                                        'language'              =>  'en',
                                        'timezone_offset'       =>  '-07:00',
                                        'dateformat'            =>  'd M, Y',
                                        'company'               =>  array(
                                                                        'title'             =>  'Cargo Pro',
                                                                        'charset'           =>  'utf-8',
                                                                        'description'       =>  'We ship anything',
                                                                        'keywords'          =>  'courier system,shipping management,cargo, shipping management',
                                                                        'primary_email'     =>  'info@cargopro.com',
                                                                        'tax_number'        =>  '123456789',
                                                                        'company_phone'     =>  '00201000000001',
                                                                        'company_phone_2'   =>  '00201000000002',
                                                                        'company_phone_3'   =>  '00201000000003',
                                                                        'facebook'          =>  'http://facebook.com/SpotlayerInc',
                                                                        'twitter'           =>  'http://twitter.com/spotlayer',
                                                                        'instagram'         =>  'http://instagram.com/spotlayer',
                                                                        'address'           =>  '21 Ahmed El-Zomor',
                                                                        'lat'               =>  '30.0470944',
                                                                        'lng'               =>  '31.362213999999994',
                                                                        'county'            =>  'Al Hay Al Asher',
                                                                        'city'              =>  'Nasr City',
                                                                        'state'             =>  'Cairo Governorate',
                                                                        'postal_code'       =>  '11787',
                                                                        'country'           =>  'Egypt',
                                                                    ),
                                        'tracking'            =>  array(
                                                                        'prefix_order'          =>  'AWB',
                                                                        'numbers_order'         =>  '5',
                                                                        'prefix_container'      =>  'CON',
                                                                        'numbers_container'     =>  '5',
                                                                        'default_deliverytime'  =>  '1',
                                                                        'default_status'        =>  '1',
                                                                        'default_tracking_id'   =>  '3',
                                                                    ),
                                        'taxes'               =>  array(
                                                                        'percent'               =>  '0',
                                                                        'insurance'             =>  '0',
                                                                    ),
                                        'notifications'       =>  array(
                                                                        'live'                  =>  0,
                                                                        'responsibility'        =>  array(
                                                                            "new_shipments"            =>  [1],
                                                                            "update_shipment"          =>  [1],
                                                                            "approved_shipment"        =>  [1],
                                                                            "refused_shipment"         =>  [1],
                                                                            "postponed_shipment"       =>  [1],
                                                                            "transfered_shipment"      =>  [1],
                                                                            "assign_shipment"          =>  [1],
                                                                            "driver_received"           =>  [1],
                                                                            "discards_request"          =>  [1],
                                                                            "received"                  =>  [1],
                                                                            "manifest_assigned"         =>  [1],
                                                                            "stock_saved"               =>  [1],
                                                                            "returned"                  =>  [1],
                                                                            "delivered"                 =>  [1],
                                                                            "return_discards"           =>  [1],
                                                                        ),
                                                                    ),
                                        'fees'                =>  array(
                                                                        'delivery_cost'                 =>  '30.00',
                                                                        'pickup_cost'                   =>  '10.00',
                                                                        'delivery_cost_back_sender'     =>  '30.00',
                                                                        'delivery_cost_back_receiver'   =>  '40.00',
                                                                    ),
                                        'invoice'             =>  array(
                                                                        'terms'                         =>  'ACCEPTED: This invoice complies with the requirements of article 774 of the commercial code modified by law 1231 of 2008 and therefore constitutes a security title. The person who signs declares to be duly authorized by the buyer to do so. The cancellation after the due date causes default interest at the current legal maximum rate.',
                                                                        'signing_company'               =>  'Company',
                                                                        'signing_customer'              =>  'Customer',
                                                                    ),
                                        'google'              =>  array(
                                                                        'map'                           =>  array(
                                                                                                                'key'           =>  '',
                                                                                                            ),
                                                                        'recaptcha'                     =>  array(
                                                                                                                'key'           =>  '',
                                                                                                            ),
                                                                    ),
                                    );
            Settings::set($default_settings);
        }


        $this->extendUserModel();
        \App::before(function () {
            // Share the variables with the mail template system
            $theme_code     = Theme::getActiveThemeCode();
            $theme          = Theme::load($theme_code);
            $translator     = Translator::instance();
            $currentLang    = $translator->getLocale();
            $settings       = Settings::instance();

            \View::share('site_title', $settings['company']['title']);
            \View::share('site_description', $settings['company']['description']);
            \View::share('site_phone', $settings['company']['company_phone']);
            \View::share('site_phone_2', $settings['company']['company_phone_2']);
            \View::share('site_phone_3', $settings['company']['company_phone_3']);
            \View::share('site_address', $settings['company']['address']);
            \View::share('site_email', $settings['company']['primary_email']);
            if($settings->mobile_logo){
                \View::share('site_logo', $settings->mobile_logo->path);
            }else{
                \View::share('site_logo', url('themes/'.$theme_code.'/assets/admin/media/logos/logo.svg'));
            }
            \View::share('currentLang', $currentLang);
            \View::share('site_url', url('/'));
            \View::share('theme_lang', $theme->getConfigArray('translate')[$currentLang]);

            // Global variable for settings
            \Event::listen('cms.page.beforeDisplay', function($controller, $url, $page) {
                $controller->vars['settings']       = $settings = Settings::instance();
                $translator                         = Translator::instance();
                $controller->vars['currentLang']    = $currentLang = $translator->getLocale();
                $theme = Theme::load(Theme::getActiveThemeCode());
                $controller->vars['theme']          = $theme;
                $controller->vars['theme_lang']     = $theme->getConfigArray('translate')[$currentLang];
                $controller->vars['primary_currency']     = \Responsiv\Currency\Models\Currency::where('is_primary', 1)->first();
                if($settings->notifications['live'] == 1){
                    $options = array(
                                        'cluster' => $settings->notifications['pusher']['cluster'],
                                        'useTLS' => true
                                    );
                    $pusher = new \Pusher\Pusher(
                                                    $settings->notifications['pusher']['key'],
                                                    $settings->notifications['pusher']['secret'],
                                                    $settings->notifications['pusher']['app_id'],
                                                    $options
                                                );
                    $controller->vars['pusher']         = $pusher;
                }
            });

        });
        \Event::listen('backend.form.extendFields', function ($widget) {

            if (
                !$widget->getController() instanceof \RainLab\Pages\Controllers\Index ||
                !$widget->model instanceof \RainLab\Pages\Classes\MenuItem
            ) {
                return;
            }

            $widget->addTabFields([
                'viewBag[icon]' => [
                    'tab' => 'Display',
                    'label' => 'Icon CSS',
                    'comment' => 'type here the svg icon content or the full <i class="icon class"></i> from the font icon if you need to show before the menu text',
                    'type' => 'textarea'
                ]
            ]);
        });
        UserModel::extend(function($model){
           $model->hasMany['activities'] = [
               'Spot\Shipment\Models\Activity'
           ];
           $model->hasMany['addresses'] = [
               'Spot\Shipment\Models\Address',
               'delete'    =>  true
           ];
           $model->hasMany['orders'] = [
               'Spot\Shipment\Models\Order',
               'key'       =>  'sender_id',
               'delete'    =>  true
           ];
           $model->hasMany['manage'] = [
               'Spot\Shipment\Models\Office',
               'key'       =>  'manager_id',
           ];
           $model->belongsTo['branch'] = [
               'Spot\Shipment\Models\Office',
               'key'       =>  'office',
           ];
           $model->hasMany['payments'] = [
               'Spot\Shipment\Models\Payment',
               'key'   =>  'for_id',
               'scope' => 'userwallet',
               'delete'    =>  true
           ];
           $model->hasMany['holds'] = [
               'Spot\Shipment\Models\Payment',
               'key'   =>  'payment_with',
               'delete'    =>  false
           ];
           $model->hasMany['tasks'] = [
               'Spot\Shipment\Models\Task'
           ];
           $model->hasMany['notes'] = [
               '\Spot\Shipment\Models\Payment',
               'key'    =>  'item_id',
               'conditions'    =>  'item_type = 2',
               'order'    =>  'id DESC',
               'delete' => true
           ];
           $model->hasOne['car'] = [
               'Spot\Shipment\Models\Car',
               'key'  =>  'driver_id'
           ];
           $model->hasOne['responsible'] = [
               'Spot\Shipment\Models\Car',
               'key'  =>  'responsible_id'
           ];
           $model->belongsTo['area'] = [
               'Spot\Shipment\Models\Area'
           ];
           $model->belongsTo['city'] = [
               'Spot\Shipment\Models\City'
           ];
           $model->belongsTo['state'] = [
               'RainLab\Location\Models\State'
           ];
           $model->belongsTo['country'] = [
               'RainLab\Location\Models\Country'
           ];
           $model->belongsToMany['carry'] = [
               'Spot\Shipment\Models\Order',
               'table'      => 'spot_shipment_employee_order',
                'key'       => 'employee_id',
                'otherKey'  => 'order_id'
           ];
           $model->bindEvent('model.beforeSave', function() use ($model) {
               $validator = \Validator::make($model->attributes, [
                   'role_id' => 'required',
               ]);

               if ($validator->fails()) {
                   $model->role_id  =   5;
               }
           });


           // Made a clients permissions
           /*
           moved to the permissions plugins
           $model->bindEvent('model.afterCreate', function() use ($model) {
               if($model->role_id == 5){
                   $model->user_permissions()->detach([1,11,22]);
                   $model->user_permissions()->attach(1, ['permission_state' => 'crud']);
                   $model->user_permissions()->attach(11, ['permission_state' => 'c']);
                   $model->user_permissions()->attach(22, ['permission_state' => 'r']);
               }
           });
           */

       });
    }
    public function registerMarkupTags()
    {
        return [
            'functions' => [
                'settings' => function() { return Settings::instance(); },
            ],
        ];
    }
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerSchedule($schedule)
    {
        $schedule->call(function () {
            $tasks = \Spot\Shipment\Models\Task::where('due_date', '=', \Carbon\Carbon::now()->toDateString())->where('status', '!=', 'completed')->get();
            foreach($tasks as $task){
                $item               = \Spot\Shipment\Models\Task::find($task->id);
                $item->status       = 'delayed';
                $item->updated_at   = \Carbon\Carbon::now();
                $item->update();
            }
        })->dailyAt('23:59');
    }

    protected function extendUserModel()
    {
        UserModel::extend(function($model) {
            $model->addFillable([
                'manager',
                'driver',
                'office',
                'places',
            ]);
            $model->addFillable([
                'manager',
                'driver',
                'office',
                'places',
            ]);
            $model->addJsonable('places');
        });
    }

}
