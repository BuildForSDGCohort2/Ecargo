<?php 
class Cms5f4ebd24ad363292642295_665b098ffb1b11a27d12bb623e86d387Class extends Cms\Classes\PartialCode
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
