<?php 
class Cms5f5a34d2e2f8b472173066_f5a59b9002e77638ef3de40b4c3c91a3Class extends Cms\Classes\PageCode
{
public function onStart(){
    if(Auth::getUser()){
        return Redirect::to('dashboard');
    }

    $this['requireActivation']      = RainLab\User\Models\Settings::get('require_activation', true);
    $this['automaticActivation']    = RainLab\User\Models\Settings::get('activate_mode', true);
}
public function onMyRegister()
{
    $data['role_id']         = 5;
    $this['account']->onRegister();
}
}
