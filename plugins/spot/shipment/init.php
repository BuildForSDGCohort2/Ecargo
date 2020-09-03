<?php
/*
Event for send notification
type :
    1 = Live Notification, System Notification, Mail Notification, SMS Noticication
    2 = System Notification, Mail Notification, SMS Notification
    3 = Mail Notification
    4 = Live Notitiaction
*/
Event::listen('spot.event', function($pusher,$settings,$data,$type = 1) {
    $persons            =   [];
    if(isset($data['persons'])){
        foreach ($data['persons'] as $person) {
            $persons[]  =   $person;
        }
    }else{
        $responsibility     =   \Spot\Shipment\Models\Settings::get('notifications', true)['responsibility'];
        if(isset($responsibility[$data['type']])){
            $responsible        =   $responsibility[$data['type']];
            if(isset($responsible['departments'])){
                foreach ($responsible['departments'] as $department) {
                    $group  =   \RainLab\User\Models\UserGroup::where('id', $department)->first();
                    //Department Managers
                    if(in_array(3,$responsible)){
                        foreach ($group->users->where('role_id', 3) as $employee) {
                            $persons[]  =   $employee->id;
                        }
                    }
                    //All Department Employees
                    if(in_array(4,$responsible)){
                        foreach ($group->users as $employee) {
                            $persons[]  =   $employee->id;
                        }
                    }
                }
                unset($responsible['departments']);
            }
            if(isset($responsible['employees'])){
                foreach ($responsible['employees'] as $employee) {
                    $persons[]  =   $employee;
                }
                unset($responsible['employees']);
            }
            if(in_array(1,$responsible)){
                $administrators  =   \RainLab\User\Models\User::where('role_id', 1)->get();
                foreach ($administrators as $administrator) {
                    $persons[]  =   $administrator->id;
                }
            }
            if(in_array(2,$responsible)){
                $supervisors  =   \RainLab\User\Models\User::where('role_id', 2)->get();
                foreach ($supervisors as $supervisor) {
                    $persons[]  =   $supervisor->id;
                }
            }
            if(in_array(6,$responsible)){
                if(isset($data['shipping_sender'])){
                    $persons[]  =   $data['shipping_sender'];
                }
            }
            if(in_array(7,$responsible)){
                if(isset($data['shipping_receiver'])){
                    $persons[]  =   $data['shipping_receiver'];
                }
            }
            if(in_array(8,$responsible)){
                if(isset($data['shipping_responsible'])){
                    $persons[]  =   $data['shipping_responsible'];
                }
            }
        }
    }

    foreach ($persons as $person) {
        //Check if user setting needs to get email notification and sound notification $data['sound'] = true/false
        //Check if setting enabled sms and live notifications or not
        $data['sound']          =   true;
        $data['for_userid']     =   $person;
        //Live Notification
        if(($type == 1 or $type == 4 )&& \Spot\Shipment\Models\Settings::get('notifications', true)['live'] == 1){
            $pusher->trigger('spotlayer', 'notification', $data);
        }
        //Mail Notification
        if($type == 1 or $type == 2 or $type == 3){

            $subject                    =   $data['subject'];
            $sender                     =   $data['sender'];
            $template                   =   'notification';
            $notification_receiver      =   \RainLab\User\Models\User::find($person);
            if($notification_receiver->email && $notification_receiver->email != '' && $notification_receiver->email != null){
                $templateParameters         =   [
                                                   'name'       => $notification_receiver->name,
                                                   'link'       => $data['url'],
                                                   'content'    => $data['message']
                                               ];

                \Mail::send($template, $templateParameters, function($message) use ($subject, $notification_receiver, $sender) {
                    $company                =   \Spot\Shipment\Models\Settings::get('company', true);
                    $message->from($company['primary_email'], $company['title']);
                    if($sender){
                      if($sender->email){
                          $message->sender($sender->email, $sender->name);
                      }else{
                          $message->sender($company['primary_email'], $sender->name);
                      }
                    }else{
                        $message->sender($company['primary_email'], $company['title']);
                    }
                    $message->to($notification_receiver->email, $notification_receiver->name);
                    if($sender){
                      if($sender->email){
                          $message->sender($sender->email, $sender->name);
                      }else{
                          $message->sender($company['primary_email'], $sender->name);
                      }
                    }else{
                        $message->sender($company['primary_email'], $company['title']);
                    }
                    $message->subject($subject);
                });
            }
        }
        //System Notification && Sms Notification
        if($type == 1 or $type == 2){
            $notification_receiver  = \RainLab\User\Models\User::find($person);
            $notification_receiver->notifications()->create([
                'id'            => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'event_type'    => $data['type'],
                'icon'          => $data['icon'],
                'type'          => $data['type'],
                'body'          => $data['subject'],
                'data'          => array(
                                        'sender'    =>  $data['sender'],
                                        'item'      =>  $data['item'],
                                        'url'       =>  $data['url'],
                                        'badge'     =>  $data['badge'],
                                    ),
            ]);

            if(\Tiipiik\SmsSender\Models\Setting::get('enable')   ==  1 && $notification_receiver->mobile){
                \Spot\Shipment\Classes\Sender::sendMessage($notification_receiver->mobile, $data['subject'].' '.$settings->tracking['prefix_order'].$data['item']->number);
            }
        }

        $notification_receiver      =   \RainLab\User\Models\User::find($person);

        if($notification_receiver->devicetoken){
            $content = array(
                "en" => $data['subject']
            );
            $heading = array(
                "en" => $data['subject']
            );

            /***********************/
            /*******Customer********/
            /***********************/


                $fields = array(
                    "registration_ids" => array($notification_receiver->devicetoken),
                    //"token" => [$userModel->devicetoken],
                    "notification" => array(
                        "body"  => $data['subject'],
                        "title" => $data['subject']
                    ),
                    "data" => array(
                        "number"  => (($data['item'] && isset($data['item']->number)) ? $data['item']->number : null),
                    )
                );


                 $fields = json_encode($fields);

                $ch = curl_init();

                $settings       =   \Spot\Shipment\Models\Settings::instance();

                //for fcm
            if(isset($settings->push_notifications['fcm']) && isset($settings->push_notifications['fcm']['customer_key'])){
                    curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/fcm/send");
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
                                                               'Authorization: key='.$settings->push_notifications['fcm']['customer_key']));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                    curl_setopt($ch, CURLOPT_HEADER, FALSE);
                    curl_setopt($ch, CURLOPT_POST, TRUE);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

                    $response = curl_exec($ch);
                    curl_close($ch);
                }
                /*
                //ANDROID
                $fields = array(
                    //TODO : change the app_id to be a settings
                   'app_id' => 'cbbde828-1e60-4530-83e2-b68b0079c4e0',
                   'include_player_ids' => [$notification_receiver->devicetoken],
                   //'included_segments' => array('All'),
                   //'included_segments' => array('Doctors'),
                   'data' => array(
                       "number"  => (($data['item'] && isset($data['item']->id)) ? $data['item']->id : null),
                   ),
                   //'url' => 'http://www.yoursite.com',
                   'contents' => $content,
                   'headings' => $heading
                );


                $fields = json_encode($fields);

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic Y2M4MGI4YzAtOWEyYy00MTc2LTk4NDMtMjNlNDc3YThkZDFk'));
                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

                $response = curl_exec($ch);
                curl_close($ch);
                */

            /***********************/
            /*******Employee********/
            /***********************/

            $fields = array(
                "registration_ids" => array($notification_receiver->devicetoken),
                //"token" => [$userModel->devicetoken],
                "notification" => array(
                    "body"  => $data['subject'],
                    "title" => $data['subject']
                ),
                "data" => array(
                    "number"  => (($data['item'] && isset($data['item']->number)) ? $data['item']->number : null),
                )
            );


             $fields = json_encode($fields);

            $ch = curl_init();

            $settings       =   \Spot\Shipment\Models\Settings::instance();

            //for fcm
            if(isset($settings->push_notifications['fcm']) && isset($settings->push_notifications['fcm']['employee_key'])){
                curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/fcm/send");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
                                                           'Authorization: key='.$settings->push_notifications['fcm']['employee_key']));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

                $response = curl_exec($ch);
                curl_close($ch);
            }
            /*
            ANDROID
            $fields = array(
                //TODO : change the app_id to be a settings
               'app_id' => '99dd0bfa-eb28-4c83-95d9-526ab3dd50a1',
               'include_player_ids' => [$notification_receiver->devicetoken],
               //'included_segments' => array('All'),
               //'included_segments' => array('Doctors'),
               'data' => array(
                   "number"  => (($data['item'] && isset($data['item']->id)) ? $data['item']->id : null),
               ),
               //'url' => 'http://www.yoursite.com',
               'contents' => $content,
               'headings' => $heading
            );


            $fields = json_encode($fields);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic ODVkNTA1Y2MtMmE2Ni00MGEwLWEwZGUtYzIzMjhiN2IwYjkz'));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            curl_setopt($ch, CURLOPT_HEADER, FALSE);
            curl_setopt($ch, CURLOPT_POST, TRUE);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

            $response = curl_exec($ch);
            curl_close($ch);
            */
        }

    }
    return true;
});
