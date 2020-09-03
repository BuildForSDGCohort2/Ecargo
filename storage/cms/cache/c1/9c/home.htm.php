<?php 
class Cms5f43b26a961b5379243529_fdacb93d465bc746b8d5d2a5c696b496Class extends Cms\Classes\PageCode
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
