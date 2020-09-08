<?php 
use \Spot\Shipment\Models\Settings;
use RainLab\Translate\Classes\Translator;
use RainLab\Translate\Components\LocalePicker;
class Cms5f578dab68fab089702410_6ea6043ce83d48a1ca21fc780ebd1b85Class extends Cms\Classes\LayoutCode
{
protected $translator;
public function onStart()
{
    if(!Auth::getUser()){
        \Flash::error($this['theme_lang']['not_allowed']);
        return Redirect::intended('login');
    }

    $this['unreaded']           =   \Zainab\SimpleContact\Models\SimpleContact::where('is_new', 1)->count();

    $this['currentPageUrl']     =   str_replace('/'.$this['currentLang'], '',$this->currentPageUrl());
}
public function onQuicksearch()
{
    $data = post();
    $no_results = 0;


    $search     =   $data['query'];

    if(Auth::getUser()->hasUserPermission(["order"],'r')) {
        $orders    =   \Spot\Shipment\Models\Order::orderBy('id', 'DESC')->where(function($q) use($search){
                            $q->where('id', $search);

                            $settings       = \Spot\Shipment\Models\Settings::instance();
                            $length         = strlen($settings['tracking']['prefix_order']);
                            $prefix         = substr($search, 0, $length);
                            if (strcasecmp($prefix, $settings['tracking']['prefix_order']) == 0) {
                                $search =   str_ireplace($settings['tracking']['prefix_order'],'',$search);
                            }
                            $q->orWhere('number', 'like', "%$search%")
                            ->orWhere(function($q) use ($search){
                                $q->whereHas('sender',function($q) use($search){
                                    $q->where('name', 'like', "%$search%")
                                    ->orWhere('username', $search)
                                    ->orWhere('mobile', $search)
                                    ->orWhere('email', $search);
                                });
                            })
                            ->orWhere(function($q) use ($search){
                                $q->whereHas('receiver',function($q) use($search){
                                    $q->where('name', 'like', "%$search%")
                                    ->orWhere('username', $search)
                                    ->orWhere('mobile', $search)
                                    ->orWhere('email', $search);
                                });
                            });
                        });



        switch (Auth::getUser()->role_id) {
            case 6:
                $orders    =   $orders->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                break;
            case 5:
                $orders    =   $orders->where(function($q){
                    $q->where('sender_id', Auth::getUser()->id);
                    $q->orWhere('receiver_id', Auth::getUser()->id);
                });
                break;
            case 4:
                if(Auth::getUser()->is_superuser){
                    $orders    =   $orders->whereIn('office_id', Auth::getUser()->office);
                }else{
                    $orders    =   $orders->where(function($q){
                        $q->where(function($q){
                            //Get all employees
                            $q->where('assigned_id', Auth::getUser()->id);
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('manifest', function($q){
                                $q->where(function($q) {
                                    $q->whereIn('driver_id', Auth::getUser()->id);
                                });
                                $q->orWhere(function($q){
                                    $q->whereIn('employee_id', Auth::getUser()->id);
                                });
                            });
                        });
                    });
                }
                break;
            case 3:
                $employees  =   \RainLab\User\Models\User::whereHas('groups',function($q){$q->whereIn('user_group_id', Auth::getUser()->groups->pluck('id')->toArray());})->pluck('id')->toArray();
                $orders    =   $orders->where(function($q) use($employees){
                    $q->where(function($q) use($employees){
                        //Get all employees
                        $q->whereIn('assigned_id', $employees);
                    });
                    $q->orWhere(function($q) use($employees){
                        $q->whereHas('manifest', function($q) use($employees){
                            $q->where(function($q) use($employees){
                                $q->whereIn('driver_id', $employees);
                            });
                            $q->orWhere(function($q) use($employees){
                                $q->whereIn('employee_id', $employees);
                            });
                        });
                    });
                });
                break;
        }

        $orders         =   $orders->get();
    }

    if(Auth::getUser()->hasUserPermission(["client"],'r')) {
        $clients    =   \RainLab\User\Models\User::where('role_id', 5)->orderBy('id', 'DESC')->where(function($q) use($search){
                            $q->orWhere('name', 'like', "%$search%");
                            $q->orWhere('username', 'like', "%$search%");
                            $q->orWhere('mobile', 'like', "%$search%");
                            $q->orWhere('email', 'like', "%$search%");
                        })->get();
    }

    if(!isset($clients) && !isset($orders)){
        $html = '
            <div class="kt-quick-search__result">
             <div class="kt-quick-search__message">
              '.$this['theme_lang']['no_records_found'].'
             </div>
         </div>
        ';
    }else{
        if((isset($clients) && empty($clients->toArray())) && (isset($orders) && empty($orders->toArray()))){
            $html = '
                <div class="kt-quick-search__result">
                 <div class="kt-quick-search__message">
                  '.$this['theme_lang']['no_records_found'].'
                 </div>
             </div>
            ';
        }else{
            $html = '
            <div class="kt-quick-search__result">';
                if(isset($orders)){
                    $html .= '<div class="kt-quick-search__category">
                        '.$this['theme_lang']['orders'].'
                    </div>';
                    $html .= '<div class="kt-quick-search__section">';
                    if(!empty($orders->toArray())){
                            foreach($orders as $order){
                                $html .= '<div class="kt-quick-search__item">
                                    <div class="kt-quick-search__item-img kt-quick-search__item-img--file">
                                        <img src="./admin/media/files/doc.svg" alt="" />
                                    </div>
                                    <div class="kt-quick-search__item-wrapper">
                                        <a href="'.url('dashboard/shipments').'/'.$order->id.'/view" class="kt-quick-search__item-title">
                             '.$this['settings']['tracking']['prefix_order'].$order->number.'
                            </a>
                                        <div class="kt-quick-search__item-desc">
                                            '.$this['theme_lang']['by'].' '.$order->sender->name.'
                                        </div>
                                    </div>
                                </div>';
                            }
                    }else{
                        $html .= '<div class="kt-quick-search__result">
                         <div class="kt-quick-search__message">
                          '.$this['theme_lang']['no_records_found'].'
                         </div>
                     </div>';
                    }
                    $html .= '</div>';
                }

                if(isset($clients)){
                    $html .= '<div class="kt-quick-search__category">
                        '.$this['theme_lang']['users'].'
                    </div>
                    <div class="kt-quick-search__section">';
                        if(!empty($clients->toArray())){
                            foreach($clients as $client){
                                $html .= '<div class="kt-quick-search__item">';
                                if($client->avatar){
                                    $html .= '<div class="kt-quick-search__item-img">
                                        <img src="'.$client->avatar->getThumb(100, 100, ['mode' => 'crop']).'" alt="" />
                                    </div>';
                                }else{
                                    $html .= '<div class="kt-quick-search__item-img">
                                        <!--<span class="kt-header__topbar-icon kt-header__topbar-icon--brand kt-badge--bold">{{user.name|capitalize|slice(0,1)}}</span>-->
                                        <span class="kt-header__topbar-icon kt-header__topbar-icon--brand kt-badge--bold">'.strtoupper(substr($client->name, 0, 2)).'</span>
                                    </div>';
                                }
                                $html .= '<div class="kt-quick-search__item-wrapper">
                                    <a href="'.url('dashboard/clients').'/'.$client->id.'/view" class="kt-quick-search__item-title">
                             '.$client->name.'
                            </a>
                                    <div class="kt-quick-search__item-desc">
                                        '.$client->mobile.'
                                    </div>
                                </div>';
                            }
                        }else{
                            $html .= '<div class="kt-quick-search__result">
                             <div class="kt-quick-search__message">
                              '.$this['theme_lang']['no_records_found'].'
                             </div>
                         </div>';
                        }
                    $html .= '</div>
                    </div>';
                }
            $html .= '</div>';
        }
    }
    return $html;
}
public function onRefreshTime(){

}
}
