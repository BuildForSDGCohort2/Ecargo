<?php 
class Cms5efa325c7bc08810195015_3c1764ac4b0fb99446e5866db3bf1f0aClass extends Cms\Classes\PartialCode
{
public function onStart(){
        $data = post();
        if(isset($data['id'])){
            $this['notifications']   =   \RainLab\User\Models\User::find($data['id'])->notifications;
        }else{
            $this['notifications']   =   $this->user->notifications;
        }
    }
}
