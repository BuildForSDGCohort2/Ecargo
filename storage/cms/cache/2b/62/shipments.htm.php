<?php 
class Cms5f4ebd78046c1879296865_90ccd49427b105e49f00bbd96aae48abClass extends Cms\Classes\PageCode
{
public function onStart(){
    if(!Auth::getUser()->hasUserPermission(["order"],'r')) {
        \Flash::error($this['theme_lang']['not_allowed']);
    }

    $this->page->listing        = true;

    $this['filter_statuses']           =   array(1 =>  $this['theme_lang']['pickup'],2 =>   $this['theme_lang']['send']);

    if(Auth::getUser()->hasUserPermission(["order"],'c') && Auth::getUser()->hasUserPermission(["manifest"],'c')){
        $this->page->actions = array(
            'buttons'   =>  array(
                array(
                    'id'    =>  'addNew',
                    'title' =>  $this['theme_lang']['add_new'],
                    'icon'  =>  'flaticon2-add',
                    'type'  =>  'info',
                    'url'   =>  url('dashboard/shipments/create'),
                ),
                array(
                    'id'    =>  'importNew',
                    'title' =>  $this['theme_lang']['multiple_add'],
                    'icon'  =>  'flaticon2-add',
                    'type'  =>  'warning',
                    'url'   =>  url('dashboard/shipments/multiCreate'),
                ),
                array(
                    'id'    =>  'PrintEmployeeOrders',
                    'title' =>  $this['theme_lang']['print_orders'],
                    'icon'  =>  'flaticon2-print',
                    'type'  =>  'info',
                    'url'   =>  'javascript:;',
                ),
            ),
            'listing'   =>  array(
                array(
                    'id'    =>  'updateStatus',
                    'title' =>  "Edit Status",
                    'icon'  =>  false,
                    'type'  =>  'success',
                    'url'   =>  'javascript:;',
                ),
                array(
                    'id'    =>  'assignEmployee',
                    'title' =>  "Assign Employee",
                    'icon'  =>  false,
                    'type'  =>  'primary',
                    'url'   =>  'javascript:;',
                ),
                array(
                    'id'    =>  'printShipments',
                    'title' =>  "Print Shipments",
                    'icon'  =>  false,
                    'type'  =>  'info',
                    'url'   =>  'javascript:;',
                ),
                array(
                    'id'    =>  'createManifest',
                    'title' =>  $this['theme_lang']['add_manifest'],
                    'icon'  =>  false,
                    'type'  =>  'warning',
                    'url'   =>  'javascript:;',
                ),

            ),
            'delete'    =>  true,
        );
    }elseif(Auth::getUser()->hasUserPermission(["order"],'c')){
        if(Auth::getUser()->role_id == 5){
            $this->page->actions = array(
                'buttons'   =>  array(
                    array(
                        'id'    =>  'addNew',
                        'title' =>  $this['theme_lang']['add_new'],
                        'icon'  =>  'flaticon2-add',
                        'type'  =>  'info',
                        'url'   =>  url('dashboard/shipments/create'),
                    )
                ),
                array(
                    'id'    =>  'importNew',
                    'title' =>  $this['theme_lang']['multiple_add'],
                    'icon'  =>  'flaticon2-add',
                    'type'  =>  'warning',
                    'url'   =>  url('dashboard/shipments/import'),
                ),
                'listing'   =>  array(
                    array(
                        'id'    =>  'sendAll',
                        'title' =>  $this['theme_lang']['send_all'],
                        'icon'  =>  false,
                        'type'  =>  'success',
                        'url'   =>  'javascript:;',
                    ),
                ),
            );
        }elseif(Auth::getUser()->role_id == 4){
            $this->page->actions = array(
                'buttons'   =>  array(
                    array(
                        'id'    =>  'addNew',
                        'title' =>  $this['theme_lang']['add_new'],
                        'icon'  =>  'flaticon2-add',
                        'type'  =>  'info',
                        'url'   =>  url('dashboard/shipments/create'),
                    ),
                    array(
                        'id'    =>  'importNew',
                        'title' =>  $this['theme_lang']['multiple_add'],
                        'icon'  =>  'flaticon2-add',
                        'type'  =>  'warning',
                        'url'   =>  url('dashboard/shipments/import'),
                    ),
                    array(
                        'id'    =>  'PrintYourOrders',
                        'title' =>  $this['theme_lang']['print_orders'],
                        'icon'  =>  'flaticon2-print',
                        'type'  =>  'info',
                        'url'   =>  'javascript:;',
                    ),
                ),
            );
        }else{
            $this->page->actions = array(
                'buttons'   =>  array(
                    array(
                        'id'    =>  'addNew',
                        'title' =>  $this['theme_lang']['add_new'],
                        'icon'  =>  'flaticon2-add',
                        'type'  =>  'info',
                        'url'   =>  url('dashboard/shipments/create'),
                    ),
                    array(
                        'id'    =>  'importNew',
                        'title' =>  $this['theme_lang']['multiple_add'],
                        'icon'  =>  'flaticon2-add',
                        'type'  =>  'warning',
                        'url'   =>  url('dashboard/shipments/import'),
                    ),
                    array(
                        'id'    =>  'PrintEmployeeOrders',
                        'title' =>  $this['theme_lang']['print_orders'],
                        'icon'  =>  'flaticon2-print',
                        'type'  =>  'info',
                        'url'   =>  'javascript:;',
                    ),
                ),
            );
        }
    }elseif(Auth::getUser()->hasUserPermission(["manifest"],'c')){
        $this->page->actions = array(
            'listing'   =>  array(
                array(
                    'id'    =>  'createManifest',
                    'title' =>  $this['theme_lang']['add_manifest'],
                    'icon'  =>  false,
                    'type'  =>  'success',
                    'url'   =>  '#',
                ),
            ),
            'delete'    =>  true,
        );
    }


    $this['cars']       = \Spot\Shipment\Models\Car::get();
    $this['employees']  = RainLab\User\Models\User::whereNotIn('role_id',[1,5])->select('id','name')->get();
    $this['shipmentStatuses']       =   \Spot\Shipment\Models\Status::select('id','name')->get();
}
public function onEnd(){
    switch($this->param('type')){
        case 'saved':
            $this->page->title = $this['theme_lang']['shipment_saved'];
            break;
        case 'requests':
            $this->page->title = $this['theme_lang']['shipment_requests'];
            break;
        case 'approved':
            $this->page->title = $this['theme_lang']['shipments_approved'];
            break;
        case 'assigned':
            $this->page->title = $this['theme_lang']['shipments_assigned'];
            break;
        case 'withdriver':
            $this->page->title = $this['theme_lang']['shipments_with_driver'];
            break;
        case 'postponed':
            $this->page->title = $this['theme_lang']['postponed_shipments'];
            break;
        case 'delivered':
            $this->page->title = $this['theme_lang']['delivered_shipments'];
            break;
        case 'supplied':
            $this->page->title = $this['theme_lang']['supplied_shipments'];
            break;
        case 'manifest':
            $this->page->title = $this['theme_lang']['shipments_manifest'];
            break;
        case 'all':
            $this->page->title = $this['theme_lang']['shipments_all'];
            break;
        default:
            if(Auth::getUser()->role_id == 5){
                $this->page->title = $this['theme_lang']['shipment_saved'];
            }else{
                $this->page->title = $this['theme_lang']['shipment_requests'];
            }
    }
}
public function onSavemanifest(){
    if(Auth::getUser()->hasUserPermission(["manifest"],'c')){

        $data = post();

        $item                   = new \Spot\Shipment\Models\Manifest;
        $item->date             = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($this['settings']['dateformat'], $data['ship_date']));
        $item->user_id          = Auth::getUser()->id;
        if(isset($data['car_id']) && $data['car_id'] != ''){
            $item->car_id           = htmlspecialchars($data['car_id']);
            $item->driver_id        = \Spot\Shipment\Models\Car::find($data['car_id'])->driver_id;
        }
        if(isset($data['employee_id']) && $data['employee_id'] != ''){
            $item->employee_id           = htmlspecialchars($data['employee_id']);
        }
        $item->created_at       = \Carbon\Carbon::now();
        $item->updated_at       = \Carbon\Carbon::now();
        $item->save();

        $ids    =   explode(",",$data['ids']);
        foreach($ids as $id){
            if($id == '' || $id == null){
                continue;
            }
            $subitem                   = \Spot\Shipment\Models\Order::find($id);
            $subitem->manifest_id      = $item->id;
            if(isset($data['employee_id']) && $data['employee_id'] != ''){
                $subitem->assigned_id      = htmlspecialchars($data['employee_id']);
            }
            $subitem->updated_at       = \Carbon\Carbon::now();
            $subitem->update();
        }


        if($item->driver_id){
            $responsiable   =   $item->driver_id;
        }elseif($item->employee_id){
            $responsiable   =   $item->employee_id;
        }

        $type   =   'manifest_assigned';
        $event_data =   array(
            'sender'                =>  Auth::getUser(),
            'shipping_sender'       =>  $item->sender_id,
            'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
            'shipping_responsible'  =>  $responsiable,
            'item'                  =>  $item,
            'type'                  =>  $type,
            'thumb'                 =>  'icon',
            'icon'                  =>  'flaticon-gift',
            'subject'               =>  $this['theme_lang'][$type],
            'message'               =>  $this['theme_lang'][$type],
            'url'                   =>  url('dashboard/shipments/manifest/'.$item->id.'/view'),
            'badge'                 =>  'success',
        );
        \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

        $activity                   = new \Spot\Shipment\Models\Activity;
        $activity->user_id          = Auth::getUser()->id;
        $activity->order_id         = $item->id;
        $activity->description      = $type;
        $activity->created_at       = \Carbon\Carbon::now();
        $activity->updated_at       = \Carbon\Carbon::now();
        $activity->save();

        \Flash::success($this['theme_lang']['created_successfully']);
    }
}
public function onEditStatus()
{
    if(Auth::getUser()->hasUserPermission(["order"],'c')){

        $data = post();

        $ids    =   explode(",",$data['ids']);
        foreach($ids as $id){
            if($id == '' || $id == null){
                continue;
            }
            $subitem                   = \Spot\Shipment\Models\Order::find($id);
            $subitem->status_id      = $data['status_id'];
            $subitem->updated_at       = \Carbon\Carbon::now();
            $subitem->update();
        }

    //    $event_data =   array(
    //        'sender'                =>  Auth::getUser(),
    //        'shipping_sender'       =>  (($item->sender_id) ? $item->sender_id : null),,
    //        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
    //        'shipping_responsible'  =>  $responsiable,
    //        'item'                  =>  $item,
    //        'type'                  =>  $type,
    //        'thumb'                 =>  'icon',
    //        'icon'                  =>  'flaticon-gift',
    //        'subject'               =>  $this['theme_lang'][$type],
    //        'message'               =>  $this['theme_lang'][$type],
    //        'url'                   =>  url('dashboard/shipments/manifest/'.$item->id.'/view'),
    //        'badge'                 =>  'success',
    //    );
    //    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    //    $activity                   = new \Spot\Shipment\Models\Activity;
    //    $activity->user_id          = Auth::getUser()->id;
    //    $activity->description      = "Edit Statuses";
    //    $activity->created_at       = \Carbon\Carbon::now();
    //    $activity->updated_at       = \Carbon\Carbon::now();
    //    $activity->save();

        \Flash::success($this['theme_lang']['created_successfully']);
         return Redirect::back();
    }
}
public function onAssignEmployee(){
    if(Auth::getUser()->hasUserPermission(["order"],'c')){

        $data = post();

        $ids    =   explode(",",$data['ids']);
        foreach($ids as $id){
            if($id == '' || $id == null){
                continue;
            }
            $subitem                   = \Spot\Shipment\Models\Order::find($id);
            $subitem->assigned_id      = $data['employee_id'];
            $subitem->updated_at       = \Carbon\Carbon::now();
            $subitem->update();
        }

    //    $event_data =   array(
    //        'sender'                =>  Auth::getUser(),
    //        'shipping_sender'       =>  (($item->sender_id) ? $item->sender_id : null),,
    //        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
    //        'shipping_responsible'  =>  $responsiable,
    //        'item'                  =>  $item,
    //        'type'                  =>  $type,
    //        'thumb'                 =>  'icon',
    //        'icon'                  =>  'flaticon-gift',
    //        'subject'               =>  $this['theme_lang'][$type],
    //        'message'               =>  $this['theme_lang'][$type],
    //        'url'                   =>  url('dashboard/shipments/manifest/'.$item->id.'/view'),
    //        'badge'                 =>  'success',
    //    );
    //    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

    //    $activity                   = new \Spot\Shipment\Models\Activity;
    //    $activity->user_id          = Auth::getUser()->id;
    //    $activity->description      = "Edit Statuses";
    //    $activity->created_at       = \Carbon\Carbon::now();
    //    $activity->updated_at       = \Carbon\Carbon::now();
    //    $activity->save();

        \Flash::success($this['theme_lang']['created_successfully']);
         return Redirect::back();
    }
}
public function onPrintShipments()
{
    $data = post();
    $newIDs=null;
    $ids    =   explode(",",$data['ids']);
    foreach($ids as $id){
        if($id == '' || $id == null){
            continue;
        }
        $newIDs[]=$id;
    }
    Session::put('printIds', $newIDs);

    //var_dump($newIDs);
    return Redirect::to("/dashboard/shipments/shipments/print/"."label");
    //return redirect("/dashboard/shipments/".$newIDs[0]."/print/"."label")->with('ids',$newIDs);
}
public function onSend(){
    if(is_array(post('id'))){
        foreach(post('id') as $id){
            if($id == ''){
                continue;
            }
            $item                   = \Spot\Shipment\Models\Order::where('id',$id)->first();

            $item->requested        = 0;
            $item->updated_at       = \Carbon\Carbon::now();
            $item->update();

            $event_data =   array(
                'sender'    =>  Auth::getUser(),
                'item'      =>  $item,
                'type'      =>  'new_shipments',
                'thumb'     =>  'icon',
                'icon'      =>  'flaticon-gift',
                'subject'   =>  $this['theme_lang']['new_shipments'],
                'message'   =>  $this['theme_lang']['new_shipments'],
                'url'       =>  url('dashboard/shipments/'.$item->id.'/view'),
                'badge'     =>  'success',
            );
            \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

            $activity                   = new \Spot\Shipment\Models\Activity;
            $activity->user_id          = Auth::getUser()->id;
            $activity->order_id         = $item->id;
            $activity->description      = 'created';
            $activity->created_at       = \Carbon\Carbon::now();
            $activity->updated_at       = \Carbon\Carbon::now();
            $activity->save();
        }
    }
}
public function onDelete()
{
    $data = post();
    if(!Auth::getUser()->hasUserPermission(["order"],'d')) {
        return Response::json(['error' => $this['theme_lang']['not_allowed']], 401);
    }

    if(null !== post('id')){
        if(is_array(post('id'))){
            foreach(post('id') as $id){
                $item = \Spot\Shipment\Models\Order::where('id',$id)->first();

                $activity                   = new \Spot\Shipment\Models\Activity;
                $activity->user_id          = Auth::getUser()->id;
                $activity->order_id         = $item->id;
                $activity->description      = 'deleted';
                $activity->created_at       = \Carbon\Carbon::now();
                $activity->updated_at       = \Carbon\Carbon::now();
                $activity->save();

                $item->payments->each->delete();
                $item->activities->each->delete();
                $item->tasks->each->delete();
                $item->items->each->delete();
                $item->delete();
            }
        }else{
            $item = \Spot\Shipment\Models\Order::where('id',$data['id'])->first();

            $activity                   = new \Spot\Shipment\Models\Activity;
            $activity->user_id          = Auth::getUser()->id;
            $activity->order_id         = $item->id;
            $activity->description      = 'deleted';
            $activity->created_at       = \Carbon\Carbon::now();
            $activity->updated_at       = \Carbon\Carbon::now();
            $activity->save();

            $item->payments->each->delete();
            $item->activities->each->delete();
            $item->tasks->each->delete();
            $item->items->each->delete();
            $item->delete();
        }
        return Redirect::back();
    }
}
public function onPrint()
{
    $data = post();
    if(Auth::getUser()->role_id != 4){
        return Redirect::to('dashboard/shipments/employee/'.$data['employee_id'].'/print/'.str_replace('/','-',$data['date']));
    }else{
        return Redirect::to('dashboard/shipments/employee/'.Auth::getUser()->id.'/print/'.str_replace('/','-',$data['date']));
    }
}
}
