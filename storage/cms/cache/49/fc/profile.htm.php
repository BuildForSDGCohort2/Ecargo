<?php 
class Cms5f576c1051de5504980811_3e7d24508dee799afbd5e1c9b8738cc5Class extends Cms\Classes\PageCode
{
public function onInit(){
    $this->avatar->bindModel('avatar', Auth::getUser());
}
public function onStart(){
    //$this['today']  = \Spot\Shipment\Models\Task::where('due_date', '=<', \Carbon\Carbon::now()->toDateString())->get();
    //$this['week']   = \Spot\Shipment\Models\Task::where('due_date', '>', \Carbon\Carbon::now()->addWeek()->toDateString())->where('due_date', '=<', \Carbon\Carbon::now()->addWeeks(2)->toDateString())->get();
    //$this['month']   = \Spot\Shipment\Models\Task::where('due_date', '>', \Carbon\Carbon::now()->addWeeks(2)->toDateString())->where('due_date', '=<', \Carbon\Carbon::now()->addWeeks(2)->addMonth()->toDateString())->get();


    $this['item']           =   \RainLab\User\Models\User::find(Auth::getUser()->id);
    $this['permissions']    =   \Spot\UserPermissions\Models\Permission::get();
    $this['countries']      =   \RainLab\Location\Models\Country::where('is_enabled', 1)->get();
    $this['groups']         =   \RainLab\User\Models\UserGroup::get();
    $this['roles']          =   \Vdomah\Roles\Models\Role::where('id', '!=', 5)->get();


    $this['getData'] = new class {
        public function countries($selected,$type = null,$select = null)
        {
            if($type == 2){
                $item = \RainLab\Location\Models\State::find($selected);
                if($item){
                    $selected   =   \RainLab\Location\Models\State::find($selected)->country_id;
                }
            }
            if($type == 3){
                $item = \Spot\Shipment\Models\City::find($selected);
                if($item){
                    $selected   =   \Spot\Shipment\Models\City::find($selected)->state->country_id;
                }
            }
            if($type == 4){
                $item = \Spot\Shipment\Models\Area::find($selected);
                if($item){
                    $selected   =   \Spot\Shipment\Models\Area::find($selected)->city->state->country_id;
                }
            }

            $countries          =   \RainLab\Location\Models\Country::where('is_enabled', 1)->get();
            foreach($countries as $country){
                $select .= '<option value="'.$country->id.'" '.(($selected == $country->id) ? 'selected' : '').'>'.$country->name.'</option>';
            }
            echo $select;
        }
        public function states($selected,$type = null,$select = null)
        {
            $country_id         =   '';
            if($type == 1){
                $country_id     =   $selected;
                $selected       =   '';
            }
            if($type == 2){
                $country     =   \RainLab\Location\Models\State::find($selected);
                if($country){
                    $selected       =   $country->id;
                    $country_id     =   $country->country_id;
                }
            }
            if($type == 3){
                $city           =   \Spot\Shipment\Models\City::find($selected);
                if($city){
                    $state     =   $city->state;
                    if($state){
                        $selected       =   $state->id;
                        $country_id     =   $state->country_id;
                    }
                }
            }
            if($type == 4){
                $area     =   \Spot\Shipment\Models\Area::find($selected);
                if($area){
                    $city           =   $area->city;
                    if($city){
                        $state     =   $city->state;
                        if($state){
                            $selected       =   $state->id;
                            $country_id     =   $state->country_id;
                        }
                    }
                }
            }

            $states         =   \RainLab\Location\Models\State::where('country_id', $country_id)->get();
            foreach($states as $state){
                $select .= '<option value="'.$state->id.'" '.(($selected == $state->id) ? 'selected' : '').'>'.$state->name.'</option>';
            }
            echo $select;
        }
        public function cities($selected,$type = null,$select = null)
        {
            $state_id       =   '';
            if($type == 2){
                $state_id       =   \RainLab\Location\Models\State::find($selected);
                $selected       =   '';
                $state_id       =   $state_id->id;
            }
            if($type == 3){
                $state_id       =   \Spot\Shipment\Models\City::find($selected);
                $selected       =   $state_id->id;
                $state_id       =   $state_id->state_id;
            }
            if($type == 4){
                $state_id       =   \Spot\Shipment\Models\Area::find($selected)->city;
                $selected       =   $state_id->id;
                $state_id       =   $state_id->state_id;
            }

            $cities         =   \Spot\Shipment\Models\City::where('state_id', $state_id)->get();
            foreach($cities as $city){
                $select .= '<option value="'.$city->id.'" '.(($selected == $city->id) ? 'selected' : '').'>'.$city->name.'</option>';
            }
            echo $select;
        }
        public function areas($selected,$type = null,$select = null)
        {
            $city_id      =   '';
            if($type == 3){
                $city_id       =   \Spot\Shipment\Models\City::find($selected);
                $city_id       =   $city_id->id;
                $selected      =   '';
            }
            if($type == 4){
                $city_id        =   \Spot\Shipment\Models\Area::find($selected);
                $selected       =   $city_id->id;
                $city_id        =   $city_id->city_id;
            }

            $areas         =   \Spot\Shipment\Models\Area::where('city_id', $city_id)->get();
            foreach($areas as $area){
                $select .= '<option value="'.$area->id.'" '.(($selected == $area->id) ? 'selected' : '').'>'.$area->name.'</option>';
            }
            echo $select;
        }
    };


    $this['getList'] = new class {
        public function states($selected,$country_id,$select = null)
        {
            $states         =   \RainLab\Location\Models\State::where('country_id', $country_id)->get();
            foreach($states as $state){
                $select .= '<option value="'.$state->id.'" '.(($selected == $state->id) ? 'selected' : '').'>'.$state->name.'</option>';
            }
            echo $select;
        }
        public function cities($selected,$state_id,$select = null)
        {
            $cities         =   \Spot\Shipment\Models\City::where('state_id', $state_id)->get();
            foreach($cities as $city){
                $select .= '<option value="'.$city->id.'" '.(($selected == $city->id) ? 'selected' : '').'>'.$city->name.'</option>';
            }
            echo $select;
        }
        public function areas($selected,$city_id,$select = null)
        {
            $areas         =   \Spot\Shipment\Models\Area::where('city_id', $city_id)->get();
            foreach($areas as $area){
                $select .= '<option value="'.$area->id.'" '.(($selected == $area->id) ? 'selected' : '').'>'.$area->name.'</option>';
            }
            echo $select;
        }
    };

}
public function onListstates(){
    if(null !== post('id')){
        $items          = RainLab\Location\Models\State::where('country_id', post('id'))->get();
        $html = '<option data-hidden="true"></option>';
        if($items){
            foreach($items as $item){
                $html .= '<option value="'.$item->id.'">'.$item->name.'</option>';
            }

        }
        return array('html'=>$html);
    }
}
public function onListcities(){
    if(null !== post('id')){
        $items          = Spot\Shipment\Models\City::where('state_id', post('id'))->get();
        $html = '<option data-hidden="true"></option>';
        if($items){
            foreach($items as $item){
                $html .= '<option value="'.$item->id.'">'.$item->name.'</option>';
            }

        }
        return array('html'=>$html);
    }
}
public function onListareas(){
    if(null !== post('id')){
        $items          = Spot\Shipment\Models\Area::where('city_id', post('id'))->get();
        $html = '<option data-hidden="true"></option>';
        if($items){
            foreach($items as $item){
                $html .= '<option value="'.$item->id.'">'.$item->name.'</option>';
            }

        }
        return array('html'=>$html);
    }
}
public function onSave()
{

    if($this['settings']['demo_mode']){
      throw new ApplicationException('NOT ALLAOWED IN DEMO');
      return false;
    }

    $data = post();
    $item                   = \RainLab\User\Models\User::find(Auth::getUser()->id);
    $item->name             = htmlspecialchars($data['name']);
    $item->email            = htmlspecialchars($data['email']);
    if(isset($data['password']) && $data['password'] != null && !empty($data['password']) && $data['password'] != ''){
        if(isset($data['password_confirmation']) && $data['password_confirmation'] != null && !empty($data['password_confirmation']) && $data['password_confirmation'] != '' && $data['password_confirmation'] == $data['password']){
            $password                       = \Hash::make($data['password']);
            $item->password                 = $password;
            $item->password_confirmation    = $password;
        }
    }
    $item->mobile           = (($data['mobile'] != '') ? htmlspecialchars($data['mobile']) : null);
    $item->phone            = (($data['phone'] != '') ? htmlspecialchars($data['phone']) : null);
    $item->street_addr      = (($data['street_addr'] != '') ? htmlspecialchars($data['street_addr']) : null);
    $item->city_id          = (($data['city'] != '') ? htmlspecialchars($data['city']) : null);
    $item->zip              = (($data['zip'] != '') ? htmlspecialchars($data['zip']) : null);
    $item->state_id         = (($data['state_id'] != '') ? htmlspecialchars($data['state_id']) : null);
    $item->country_id       = (($data['country_id'] != '') ? htmlspecialchars($data['country_id']) : null);
    $item->updated_at       = \Carbon\Carbon::now();
    $item->update();

    if(isset($data['password']) && $data['password'] != null && !empty($data['password']) && $data['password'] != ''){
        if(isset($data['password_confirmation']) && $data['password_confirmation'] != null && !empty($data['password_confirmation']) && $data['password_confirmation'] != '' && $data['password_confirmation'] == $data['password']){
            \RainLab\User\Models\User::where('id', $item->id)->update(['password' => \Hash::make($data['password']) ]);
        }
    }


    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard/account/edit');
}
public function onPlaces()
{
    $data = post();

    if($this['settings']['demo_mode']){
      throw new ApplicationException('NOT ALLAOWED IN DEMO');
      return false;
    }

    $item                   = \RainLab\User\Models\User::find(Auth::getUser()->id);

    if($item->role_id == 5) {

        $ids = [];
        if(isset($data['addresses'])){
            foreach($data['addresses'] as $address){
                if(isset($address['id'])){
                    $ids[]  =   $address['id'];
                    $subitem                    = \Spot\Shipment\Models\Address::find($address['id']);
                    if(isset($address['name'])){
                        $subitem->name              = htmlspecialchars($address['name']);
                    }
                    $subitem->street            = htmlspecialchars($address['street_address']);
                    $subitem->county            = htmlspecialchars($address['county']);
                    $subitem->city              = htmlspecialchars($address['city']);
                    $subitem->state             = htmlspecialchars($address['state']);
                    $subitem->zipcode           = htmlspecialchars($address['postal_code']);
                    $subitem->country           = htmlspecialchars($address['country']);
                    $subitem->lat               = htmlspecialchars($address['lat']);
                    $subitem->lng               = htmlspecialchars($address['lng']);
                    $subitem->url               = htmlspecialchars($address['url']);
                    if(isset($address['default'])){
                        $subitem->default           = htmlspecialchars($address['default']);
                    }
                    $subitem->updated_at        = \Carbon\Carbon::now();
                    $subitem->update();
                }else{
                    $subitem                    = new \Spot\Shipment\Models\Address;
                    $subitem->user_id           = $item->id;
                    if(isset($address['name'])){
                        $subitem->name              = htmlspecialchars($address['name']);
                    }
                    $subitem->street            = htmlspecialchars($address['street_address']);
                    $subitem->county            = htmlspecialchars($address['county']);
                    $subitem->city              = htmlspecialchars($address['city']);
                    $subitem->state             = htmlspecialchars($address['state']);
                    $subitem->zipcode           = htmlspecialchars($address['postal_code']);
                    $subitem->country           = htmlspecialchars($address['country']);
                    $subitem->lat               = htmlspecialchars($address['lat']);
                    $subitem->lng               = htmlspecialchars($address['lng']);
                    $subitem->url               = htmlspecialchars($address['url']);
                    if(isset($address['default'])){
                        $subitem->default           = htmlspecialchars($address['default']);
                    }
                    $subitem->created_at        = \Carbon\Carbon::now();
                    $subitem->updated_at        = \Carbon\Carbon::now();
                    $subitem->save();

                    $ids[]  =   $subitem->id;
                }
            }
        }
        \Spot\Shipment\Models\Address::whereNotIn('id', $ids)->delete();

    }else{
        $areas              = array();
        if(isset($data['addresses'])){
            foreach($data['addresses']  as $address){
                switch($address['type']){
                    case 1:
                        $areas[]        = array(
                                                'area'  =>  $address['country'],
                                                'type'  =>  1,
                                            );
                    break;
                    case 2:
                        $areas[]        = array(
                                                'area'  =>  $address['state'],
                                                'type'  =>  2,
                                            );
                    break;
                    case 3:
                        $areas[]        = array(
                                                'area'  =>  $address['city'],
                                                'type'  =>  3,
                                            );
                    break;
                    case 4:
                        $areas[]        = array(
                                                'area'  =>  $address['area'],
                                                'type'  =>  4,
                                            );
                    break;
                }
            }
        }
        $item->places           = $areas;
        $item->updated_at       = \Carbon\Carbon::now();
        $item->update();
    }

    \Flash::success($this['theme_lang']['updated_successfully']);
    return Redirect::to('dashboard/account/addresses');
}
}
