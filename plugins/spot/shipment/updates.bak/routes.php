<?php

use RainLab\User\Models\User as UserModel;
//use \Spot\Shipment\Classes\FCMServiceProvider as FCMService;

Route::get('/', function () {
    return Redirect::to('dashboard');
});


Route::group(['prefix' => 'api'], function() {
    /********************************************/
    /*              WEBSERVICES                 */
    /********************************************/
    /********************************************/
    /*              CLIENT APP                 */
    /********************************************/
        Route::post('webservices/clientlogin', function (Request $request) {
            $credentials = [
                'username' => Request::get('username'),
                'password' => Request::get('password'),
            ];

            try {
                // verify the credentials and create a token for the user
                if (! $token = JWTAuth::attempt($credentials)) {
                    return response()->json(['error' => 'invalid_credentials'], 401);
                }
            } catch (JWTException $e) {
                // something went wrong
                return response()->json(['error' => 'could_not_create_token'], 500);
            }

            $userModel = JWTAuth::authenticate($token);

            if($userModel->role_id != 5){
                return response()->json(['error' => 'invalid_credentials'], 401);
            }


            $user = [
                'id' => $userModel->id,
                'name' => $userModel->name,
                'surname' => $userModel->surname,
                'username' => $userModel->username,
                'email' => $userModel->email,
                'phone' => $userModel->phone,
                'gender' => $userModel->gender,
                'mobile' => $userModel->mobile,
                'avatar' => (($userModel->avatar) ? $userModel->avatar->getThumb(100, 100, ['mode' => 'crop']) : null),
                'language' => (($userModel->language) ? $userModel->language : 'en'),
            ];


            if(isset($userModel->devicetoken) && $userModel->devicetoken != null && $userModel->devicetoken != ''){


                $content = array(
                    "en" => "تهانينا لك.. لقد انضممت للتو لإسلوب حياة أكثر راحة وذكاء!.. تمتع بتجربة شراء عصرية وفريدة مع توفير الوقت والجهد والمال على تطبيق تسوَّق."
                );
                $heading = array(
                    "en" => "تهانينا لك.. لقد انضممت للتو لإسلوب حياة أكثر راحة وذكاء!.. تمتع بتجربة شراء عصرية وفريدة مع توفير الوقت والجهد والمال على تطبيق تسوَّق."
                );

                /* ANDROID */
                //for onesignal
                  /*  $fields = array(
                       'app_id' => 'cbbde828-1e60-4530-83e2-b68b0079c4e0',
                       'include_player_ids' => [$userModel->devicetoken],
                       //'included_segments' => array('All'),
                       //'included_segments' => array('Doctors'),
                       'data' => array(
                           "number"  => 1,
                       ),
                       //'url' => 'http://www.yoursite.com',
                       'contents' => $content,
                       'headings' => $heading
                    );

                  */

                //for fcm
                    $fields = array(
                        "registration_ids" => array($userModel->devicetoken),
                        //"token" => [$userModel->devicetoken],
                        "notification" => array(
                            "body"  => $content,
                            "title" => $heading
                        ),
                        "data" => array(
                            "number" => (($event_data['item'] && isset($event_data['item']->number)) ? $event_data['item']->number : null)
                        )
                    );


                     $fields = json_encode($fields);

                    $ch = curl_init();
                //for onesignal
                /*
                    curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic Y2M4MGI4YzAtOWEyYy00MTc2LTk4NDMtMjNlNDc3YThkZDFk'));
                    //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                    curl_setopt($ch, CURLOPT_HEADER, FALSE);
                    curl_setopt($ch, CURLOPT_POST, TRUE);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                */
                  $settings       =   \Spot\Shipment\Models\Settings::instance();
                //for fcm
                    curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/fcm/send");
                    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
                                                               'Authorization: key='.$settings->notifications['fcm']['customer_key']));
                    //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                    curl_setopt($ch, CURLOPT_HEADER, FALSE);
                    curl_setopt($ch, CURLOPT_POST, TRUE);
                    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

                    $response = curl_exec($ch);
                    curl_close($ch);
                /* END ANDROID */

                /* IOS */
                    /*
                        $fields = array(
                           'app_id' => 'cbbde828-1e60-4530-83e2-b68b0079c4e0',
                           'include_player_ids' => [$userModel->devicetoken],
                           //'included_segments' => array('All'),
                           //'included_segments' => array('Doctors'),
                           'data' => array(
                               "number"  => 1,
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
                /* END IOS */
            }


            // if no errors are encountered we can return a JWT
            return response()->json(compact('token', 'user'));
        });
        Route::get('webservices/test', function () {


                            $content = array(
                                "en" => "تجربة للبوش نوتفكيشين"
                            );
                            $heading = array(
                                "en" => "تجربة للبوش نوتفكيشين"
                            );

                            /* ANDROID */
                            //for onesignal
                            /*
                                $fields = array(
                                   'app_id' => 'cbbde828-1e60-4530-83e2-b68b0079c4e0',
                                   'include_player_ids' => ['86b72f15-98b0-4fbf-9708-f84caa0c1fa3'],
                                   //'included_segments' => array('All'),
                                   //'included_segments' => array('Doctors'),
                                   'data' => array(
                                       "number"  => 1,
                                   ),
                                   //'url' => 'http://www.yoursite.com',
                                   'contents' => $content,
                                   'headings' => $heading
                                );
                            */
                                //for fcm
                                $fields = array(
                                    "registration_ids" => array('86b72f15-98b0-4fbf-9708-f84caa0c1fa3'),
                                    //"token" => [$userModel->devicetoken],
                                    "notification" => array(
                                        "body"  => $content,
                                        "title" => $heading
                                    ),
                                    "data" => array(
                                        "number" => (($data['item'] && isset($data['item']->number)) ? $data['item']->number : null)
                                    )
                                );
                                $fields = json_encode($fields);

                                $ch = curl_init();
                                //for onesignal
                                /*
                                curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
                                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic Y2M4MGI4YzAtOWEyYy00MTc2LTk4NDMtMjNlNDc3YThkZDFk'));
                                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                                curl_setopt($ch, CURLOPT_POST, TRUE);
                                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                                */

                                $settings       =   \Spot\Shipment\Models\Settings::instance();

                                //for fcm
                                curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/fcm/send");
                                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
                                                                           'Authorization: key='.$settings->notifications['fcm']['customer_key']));
                                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                                curl_setopt($ch, CURLOPT_POST, TRUE);
                                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

                                $response = curl_exec($ch);
                                curl_close($ch);

                            $content = array(
                                "en" => "تجربة للبوش نوتفكيشين"
                            );
                            $heading = array(
                                "en" => "تجربة للبوش نوتفكيشين"
                            );

                            /* ANDROID */
                            /*
                                $fields = array(
                                   'app_id' => '99dd0bfa-eb28-4c83-95d9-526ab3dd50a1',
                                   'include_player_ids' => ['aac6cf48-a29d-4bc9-81ef-25cdd4284a9c'],
                                   //'included_segments' => array('All'),
                                   //'included_segments' => array('Doctors'),
                                   'data' => array(
                                       "number"  => 1,
                                   ),
                                   //'url' => 'http://www.yoursite.com',
                                   'contents' => $content,
                                   'headings' => $heading
                                );
                            */
                                //for fcm
                                $fields = array(
                                    "registration_ids" => array('aac6cf48-a29d-4bc9-81ef-25cdd4284a9c'),
                                    //"token" => [$userModel->devicetoken],
                                    "notification" => array(
                                        "body"  => $content,
                                        "title" => $heading
                                    ),
                                    "data" => array(
                                        "number" =>(($event_data['item'] && isset($event_data['item']->number)) ? $event_data['item']->number : null)
                                    )
                                );

                                $fields = json_encode($fields);

                                $ch = curl_init();

                                /*
                                curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
                                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic ODVkNTA1Y2MtMmE2Ni00MGEwLWEwZGUtYzIzMjhiN2IwYjkz'));
                                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                                curl_setopt($ch, CURLOPT_POST, TRUE);
                                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                                */

                                $settings       =   \Spot\Shipment\Models\Settings::instance();

                                //for fcm
                                curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/fcm/send");
                                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
                                                                           'Authorization: key='.$settings->notifications['fcm']['customer_key']));
                                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                                curl_setopt($ch, CURLOPT_POST, TRUE);
                                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

                                $response = curl_exec($ch);
                                curl_close($ch);

        });
        Route::post('webservices/clientregister', function () {
            $credentials = Input::only('email', 'password', 'password_confirmation', 'name','mobile','username');

            try {
                $userModel = UserModel::create($credentials);
                $userModel->update(['role_id'   =>  5,  'is_activated'   =>  1,  'activated_at'  =>  \Carbon\Carbon::now()]);

                $subitem                    = new \Spot\Shipment\Models\Address;
                $subitem->user_id           = $userModel->id;
                $subitem->name              = Request::get('address_name');
                $subitem->street            = Request::get('address_name');
                $subitem->lat               = ((Request::get('lat')) ? Request::get('lat') : null);
                $subitem->lng               = ((Request::get('lng')) ? Request::get('lng') : null);
                $subitem->county            = Request::get('area_id');
                $subitem->city              = Request::get('city_id');
                $subitem->zipcode           = ((Request::get('postal_code')) ? Request::get('postal_code') : null);
                $subitem->state             = Request::get('state_id');
                $subitem->country           = Request::get('country_id');
                $subitem->default           = 1;
                $subitem->created_at        = \Carbon\Carbon::now();
                $subitem->updated_at        = \Carbon\Carbon::now();
                $subitem->save();

                $user = [
                    'id' => $userModel->id,
                    'name' => $userModel->name,
                    'surname' => $userModel->surname,
                    'username' => $userModel->username,
                    'email' => $userModel->email,
                    'phone' => $userModel->phone,
                    'gender' => $userModel->gender,
                    'mobile' => $userModel->mobile,
                    'language' => (($userModel->language) ? $userModel->language : \Spot\Shipment\Models\Settings::get('language', true)),
                ];

            } catch (Exception $e) {
                return Response::json(['error' => $e->getMessage()], 401);
            }

            $token = JWTAuth::fromUser($userModel);

            return Response::json(compact('token', 'user'));
        });
        Route::get('webservices/offices', function (\Request $request) {
            $language   =   ((Request::get('lang')) ? Request::get('lang') : \Spot\Shipment\Models\Settings::get('language', true));
            $items      =   \Spot\Shipment\Models\Office::get();
            $array      =   [];
            foreach($items as $item){
                $item   =   array(
                                'id'        =>  $item->id,
                                'name'      =>  $item->lang($language)->name,
                            );
                array_push($array, $item);
            }
            return response()->json($array);
        });
        Route::get('webservices/addresses', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }
            $items      =   \Spot\Shipment\Models\Address::where('user_id', Request::get('user_id'))->get();
            $array      =   [];
            foreach($items as $item){
                $item   =   array(
                                'id'        =>  $item->id,
                                'name'      =>  $item->name,
                                'default'   =>  $item->default,
                            );
                array_push($array, $item);
            }
            return response()->json($array);
        });
        Route::get('webservices/notifications', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            $perpage    =   10;
            if(Request::get('page')){
                $skip       =   ((Request::get('page')*10)-10);
            }else{
                $skip       =   0;
            }
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }
            $notifications   =   RainLab\Notify\Models\Notification::orderBy('id', 'DESC');
            $notifications   =   $notifications->where('notifiable_id',$user->id)->skip($skip)->take($perpage)->get();
            $array      =   [];
            if($notifications){

                $theme_code     = \Cms\Classes\Theme::getActiveThemeCode();
                $theme          = \Cms\Classes\Theme::load($theme_code);
                $translator     = \RainLab\Translate\Classes\Translator::instance();
                $currentLang    = $translator->getLocale();
                $theme_lang     = $theme->getConfigArray('translate')[$currentLang];

                foreach($notifications as $item){


                    $shipment   =   \Spot\Shipment\Models\Order::find($item->data['item']['id']);

                    $item   =   array(
                                    'id'       =>  $item->id,
                                    'item_id'       =>  $item->data['item']['id'],
                                    'number'       =>  \Spot\Shipment\Models\Settings::get('tracking', true)['prefix_order'].(($shipment) ? $shipment->number : ''),
                                    'content'       =>  $item->body,
                                    'read'       =>  (($item->read_at) ? 1 : 0)
                                );
                    array_push($array, $item);
                }
            }
            return response()->json($array);
        })->middleware('web');
        Route::get('webservices/notificationscount', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }
            $notifications   =   RainLab\Notify\Models\Notification::orderBy('id', 'DESC');
            $notifications   =   $notifications->where('notifiable_id',$user->id)->where('read_at',null)->count();
            return response()->json($notifications);
        })->middleware('web');
        Route::post('webservices/readnotification', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }

            $item               =   RainLab\Notify\Models\Notification::where('id', Request::get('id'))->first();
            $item->read_at       = \Carbon\Carbon::now();
            $item->update();

            return response()->json(['success' => 'ok'], 200);
        });
        Route::get('webservices/wallet', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }
            $wallet     =   $item->payments->sum('amount');
            return response()->json(compact('wallet'));
        })->middleware('web');
        Route::get('webservices/categories', function (\Request $request) {
            $language   =   ((Request::get('lang')) ? Request::get('lang') : \Spot\Shipment\Models\Settings::get('language', true));
            $items      =   \Spot\Shipment\Models\Category::get();
            $array      =   [];
            foreach($items as $item){
                $item   =   array(
                                'id'        =>  $item->id,
                                'name'      =>  $item->lang($language)->name,
                            );
                array_push($array, $item);
            }
            return response()->json($array);
        });
        Route::get('webservices/packages', function (\Request $request) {
            $language   =   ((Request::get('lang')) ? Request::get('lang') : \Spot\Shipment\Models\Settings::get('language', true));
            $items      =   \Spot\Shipment\Models\Packaging::get();
            $array      =   [];
            foreach($items as $item){
                $item   =   array(
                                'id'        =>  $item->id,
                                'name'      =>  $item->lang($language)->name,
                            );
                array_push($array, $item);
            }
            return response()->json($array);
        });
        Route::get('webservices/countries', function (\Request $request) {
            $language   =   ((Request::get('lang')) ? Request::get('lang') : \Spot\Shipment\Models\Settings::get('language', true));
            $items      =   \RainLab\Location\Models\Country::where('is_enabled', true)->get();
            $array      =   [];
            foreach($items as $item){
                $item   =   array(
                                'id'        =>  $item->id,
                                'name'      =>  $item->lang($language)->name,
                                'code'      =>  $item->code,
                            );
                array_push($array, $item);
            }
            return response()->json($array);
        });
        Route::get('webservices/regions', function (\Request $request) {
            $language   =   ((Request::get('lang')) ? Request::get('lang') : \Spot\Shipment\Models\Settings::get('language', true));
            $items      =   \RainLab\Location\Models\State::where('country_id',Request::get('country_id'))->get();
            $array      =   [];
            foreach($items as $item){
                $item   =   array(
                                'id'        =>  $item->id,
                                'name'      =>  $item->lang($language)->name,
                                'code'      =>  $item->code,
                            );
                array_push($array, $item);
            }
            return response()->json($array);
        });
        Route::get('webservices/cities', function (\Request $request) {
            $language   =   ((Request::get('lang')) ? Request::get('lang') : \Spot\Shipment\Models\Settings::get('language', true));
            $items      =   \Spot\Shipment\Models\City::where('state_id',Request::get('state_id'))->get();
            $array      =   [];
            foreach($items as $item){
                $item   =   array(
                                'id'        =>  $item->id,
                                'name'      =>  $item->lang($language)->name,
                            );
                array_push($array, $item);
            }
            return response()->json($array);
        });
        Route::get('webservices/areas', function (\Request $request) {
            $language   =   ((Request::get('lang')) ? Request::get('lang') : \Spot\Shipment\Models\Settings::get('language', true));
            $items      =   \Spot\Shipment\Models\Area::where('city_id',Request::get('city_id'))->get();
            $array      =   [];
            foreach($items as $item){
                $item   =   array(
                                'id'        =>  $item->id,
                                'name'      =>  $item->lang($language)->name,
                            );
                array_push($array, $item);
            }
            return response()->json($array);
        });
        Route::get('webservices/shipment', function (\Request $request) {
            //$token      =   Request::get('token');
            //$user       =   JWTAuth::authenticate($token);
            $language   =   ((Request::get('lang')) ? Request::get('lang') : \Spot\Shipment\Models\Settings::get('language', true));
            /*
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }
            */
            if(Request::get('id')){
                $item       =   \Spot\Shipment\Models\Order::where('id', Request::get('id'))->first();
            }else{
                $number     =   str_replace(\Spot\Shipment\Models\Settings::get('tracking', true)['prefix_order'],'',Request::get('number'));
                $item       =   \Spot\Shipment\Models\Order::where('number', $number)->first();
            }
            if(!$item){
                return response()->json(['error' => 'not_found'], 500);
            }
            $array      =   [
                                "id"                    =>   $item->id,
                                "office"                =>   array(
                                                                'id'        =>  $item->office_id,
                                                                'name'      =>  $item->office->lang($language)->name,
                                                            ),
                                "number"                =>   \Spot\Shipment\Models\Settings::get('tracking', true)['prefix_order'].$item->number,
                                "type"                  =>   $item->type,
                                "sender"                =>   array(
                                                                'id'        =>  $item->sender_id,
                                                                'name'      =>  $item->sender->name,
                                                                'mobile'    =>  $item->sender->mobile,
                                                            ),
                                "sender_address"        =>   array(
                                                                'id'        =>  $item->sender_address_id,
                                                                'address'   =>  $item->sender_address->street.' '.(($item->sender_address->area) ? $item->sender_address->area->lang($language)->name: '').' '.(($item->sender_address->thecity) ? $item->sender_address->thecity->lang($language)->name: '').' '.(($item->sender_address->thestate) ? $item->sender_address->thestate->lang($language)->name: '').' '.(($item->sender_address->thecountry) ? $item->sender_address->thecountry->lang($language)->name: ''),
                                                                'lat'       =>  $item->sender_address->lat,
                                                                'lng'       =>  $item->sender_address->lng,
                                                            ),
                                "packaging"             =>   array(
                                                                'id'        =>  $item->packaging_id,
                                                                'name'      =>  $item->packaging->lang($language)->name,
                                                            ),
                                "ship_date"             =>   \Carbon\Carbon::parse($item->ship_date)->format(\Spot\Shipment\Models\Settings::get('dateformat', true)),
                                "receive_date"          =>   \Carbon\Carbon::parse($item->receive_date)->format(\Spot\Shipment\Models\Settings::get('dateformat', true)),
                                "courier"               =>   (($item->courier_id) ? $item->courier->lang($language)->name : null),
                                "delivery_time"         =>   $item->deliverytime->lang($language)->name,
                                "delivery_date"         =>   \Carbon\Carbon::parse($item->delivery_date)->format(\Spot\Shipment\Models\Settings::get('dateformat', true)),
                                "mode"                  =>   (($item->mode_id) ? $item->mode->lang($language)->name : null),
                                "status"                =>   $item->status->lang($language)->name,
                                "tax"                   =>   $item->tax,
                                "insurance"             =>   $item->insurance,
                                "currency_id"           =>   $item->currency->lang($language)->name,
                                "payment_type"          =>   $item->payment_type,
                                "customs_value"         =>   Currency::format($item->customs_value),
                                "courier_fee"           =>   Currency::format($item->courier_fee),
                                "package_fee"           =>   $item->package_fee,
                                "return_package_fee"    =>   $item->return_package_fee,
                                "return_courier_fee"    =>   $item->return_courier_fee,
                                "package_fee_amount"           =>   $item->package_fee,
                                "courier_fee_amount"    =>   $item->courier_fee,
                                "return_courier_fee_amount"    =>   $item->return_courier_fee,
                                "return_defray"         =>   $item->return_defray,
                                "created_at"            =>   \Carbon\Carbon::parse($item->created_at)->format(\Spot\Shipment\Models\Settings::get('dateformat', true)),
                                "updated_at"            =>   \Carbon\Carbon::parse($item->updated_at)->format(\Spot\Shipment\Models\Settings::get('dateformat', true)),
                                "requested"             =>   $item->requested,
                                "barcode"               =>   $item->number,
                                "addnote"               =>   true,
                                "discards"              =>   true
                            ];
            if($item->manifest_id){
                $array["manifest"]                      =   array(
                                                                'id'        =>  $item->manifest_id,
                                                            );
            }
            if($item->assigned_id){
                $array["assigned"]                      =   array(
                                                                'id'        =>  $item->assigned_id,
                                                            );
            }
            if($item->receiver_id){
                $array["receiver"]                      =   array(
                                                                'id'        =>  $item->receiver_id,
                                                                'name'      =>  $item->receiver->name,
                                                                'mobile'    =>  $item->receiver->mobile,
                                                            );
                $array["receiver_address"]              =   array(
                                                                'id'        =>  $item->receiver_address_id,
                                                                'address'   =>  $item->receiver_address->street.' '.(($item->receiver_address->area) ? $item->receiver_address->area->lang($language)->name: '').' '.(($item->receiver_address->thecity) ? $item->receiver_address->thecity->lang($language)->name: '').' '.(($item->receiver_address->thestate) ? $item->receiver_address->thestate->lang($language)->name: '').' '.(($item->receiver_address->thecountry) ? $item->receiver_address->thecountry->lang($language)->name: ''),
                                                                'lat'       =>  $item->receiver_address->lat,
                                                                'lng'       =>  $item->receiver_address->lng,
                                                            );
            }
            if($item->notes){
                foreach($item->notes as $note){
                    $array["notes"][]   =   array(
                        'user'          =>  $note->user->name,
                        'date'          =>  $note->created_at,
                        'note'          =>  $note->content,
                    );
                }
            }
            if($item->activities){
                foreach($item->activities as $activity){
                    $array["history"][]   =   array(
                        'user'          =>  $activity->user->name,
                        'date'          =>  $activity->created_at,
                        'note'          =>  (($activity->other) ? $activity->other : $activity->description),
                    );
                }
            }

            if($item->type == 1){
                $array["destination"]              =   array(
                'lat'       =>  $item->sender_address->lat,
                'lng'       =>  $item->sender_address->lng,
                            );
            }else{
                $array["destination"]              =   array(
                                'lat'       =>  $item->receiver_address->lat,
                                'lng'       =>  $item->receiver_address->lng,
                            );
            }

            $array["modifications"]  =   $array["edit"]  =   $array["discards"]  =   $array["receive"]  =   $array["delivered"]  =   $array["postpone"]  =   $array["update"]  =   $array["supplied"]  =   false;

            switch ($item->requested) {
                case 0:
                    $array["modifications"]         =   true;
                    $array["edit"]                  =   true;
                    break;
                case 1:
                    $array["modifications"]         =   true;
                    $array["edit"]                  =   true;
                    if($item->type     ==   1){
                        $array["receive"]               =   true;
                    }
                    $array["postpone"]              =   true;
                    break;
                case 3:
                    $array["modifications"]         =   true;
                    $array["postpone"]              =   true;
                    $array["delivered"]             =   true;
                    $array["discards"]             =   true;
                case 5:
                    $array["modifications"]         =   true;
                    $array["postpone"]              =   true;
                    $array["supplied"]              =   true;
                case 5:
                    $array["modifications"]         =   true;
                    $array["postpone"]              =   true;
                    $array["supplied"]              =   true;
                    break;
                case 6:
                    $array["modifications"]         =   true;
                    $array["supplied"]              =   true;
                    break;
                case 7:
                    $array["modifications"]         =   true;
                    $array["postpone"]              =   true;
                    $array["delivered"]             =   true;
                    $array["discards"]             =   true;
                case 9:
                    $array["modifications"]         =   true;
                    $array["postpone"]              =   true;
                    $array["delivered"]             =   true;
                    $array["discards"]             =   true;
            }

            $array["edit"]  =   false;

            return response()->json($array);
        });
        Route::get('webservices/shipments', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            $perpage    =   10;
            $skip       =   0;
            $language   =   (($user->language) ? $user->language : \Spot\Shipment\Models\Settings::get('language', true));
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }

            $records    =   \Spot\Shipment\Models\Order::orderBy('id', 'DESC');
            switch ($user->role_id) {
                case 6:
                    $records    =   $records->whereIn('office_id', $user->manage->pluck('id')->toArray());
                    break;
                case 5:
                    $records    =   $records->where(function($q) use($user){
                        $q->where('sender_id', $user->id);
                        $q->orWhere('receiver_id', $user->id);
                    });
                    break;
                case 4:
                    if($user->is_superuser){
                        $records    =   $records->where(function($q) use($user){
                            $q->where('office_id', $user->office);
                            $q->orWhere(function($q) use($user){
                                //Get all employees
                                $q->where('assigned_id', $user->id);
                            });
                            $q->orWhere(function($q) use($user){
                                $q->whereHas('manifest', function($q) use($user){
                                    $q->where(function($q) use($user) {
                                        $q->where('driver_id', $user->id);
                                    });
                                    $q->orWhere(function($q) use($user){
                                        $q->where('employee_id', $user->id);
                                    });
                                });
                            });
                        });
                    }else{
                        $records    =   $records->where(function($q) use($user){
                            $q->where(function($q) use($user){
                                //Get all employees
                                $q->where('assigned_id', $user->id);
                            });
                            $q->orWhere(function($q) use($user){
                                $q->whereHas('manifest', function($q) use($user){
                                    $q->where(function($q) use($user) {
                                        $q->where('driver_id', $user->id);
                                    });
                                    $q->orWhere(function($q) use($user){
                                        $q->where('employee_id', $user->id);
                                    });
                                });
                            });
                        });
                    }
                    break;
                case 3:
                    $employees  =   \RainLab\User\Models\User::whereHas('groups',function($q){$q->whereIn('user_group_id', $user->groups->pluck('id')->toArray());})->pluck('id')->toArray();
                    $records    =   $records->where(function($q) use($employees){
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

            $records    =   $records->skip($skip)->take($perpage)->get();
            if(!$records){
                return response()->json(['error' => 'not_found'], 500);
            }
            $array      =   [];
            foreach($records as $item){
                $item_array   =   array(
                                "id"                    =>   $item->id,
                                "office"                =>   array(
                                                                'id'        =>  $item->office_id,
                                                                'name'      =>  $item->office->lang($language)->name,
                                                            ),
                                "number"                =>   \Spot\Shipment\Models\Settings::get('tracking', true)['prefix_order'].$item->number,
                                "type"                  =>   $item->type,
                                "sender"                =>   array(
                                                                'id'        =>  $item->sender_id,
                                                                'name'      =>  $item->sender->name,
                                                                'mobile'    =>  $item->sender->mobile,
                                                            ),
                                "sender_address"        =>   array(
                                                                'id'        =>  $item->sender_address_id,
                                                                'address'   =>  (($item->sender_address) ? $item->sender_address->street.' '.(($item->sender_address->area) ? $item->sender_address->area->lang($language)->name: '').' '.(($item->sender_address->thecity) ? $item->sender_address->thecity->lang($language)->name: '').' '.(($item->sender_address->thestate) ? $item->sender_address->thestate->lang($language)->name: '').' '.(($item->sender_address->thecountry) ? $item->sender_address->thecountry->lang($language)->name: '') : ''),
                                                                'lat'       =>  (($item->sender_address) ? $item->sender_address->lat : ''),
                                                                'lng'       =>  (($item->sender_address) ? $item->sender_address->lng : ''),
                                                            ),
                                "packaging"             =>   array(
                                                                'id'        =>  $item->packaging_id,
                                                                'name'      =>  $item->packaging->lang($language)->name,
                                                            ),
                                "ship_date"             =>   \Carbon\Carbon::parse($item->ship_date)->format(\Spot\Shipment\Models\Settings::get('dateformat', true)),
                                "receive_date"          =>   \Carbon\Carbon::parse($item->receive_date)->format(\Spot\Shipment\Models\Settings::get('dateformat', true)),
                                "courier"               =>   (($item->courier_id) ? $item->courier->lang($language)->name : null),
                                "delivery_time"         =>   $item->deliverytime->lang($language)->name,
                                "delivery_date"         =>   \Carbon\Carbon::parse($item->delivery_date)->format(\Spot\Shipment\Models\Settings::get('dateformat', true)),
                                "mode"                  =>   (($item->mode_id) ? $item->mode->lang($language)->name : null),
                                "status"                =>   $item->status->lang($language)->name,
                                "tax"                   =>   $item->tax,
                                "insurance"             =>   $item->insurance,
                                "currency_id"           =>   $item->currency->lang($language)->name,
                                "payment_type"          =>   $item->payment_type,
                                "customs_value"         =>   Currency::format($item->customs_value),
                                "courier_fee"           =>   Currency::format($item->courier_fee),
                                "courier_fee_amount"    =>   $item->courier_fee,
                                "package_fee"           =>   Currency::format($item->package_fee),
                                "package_fee_amount"           =>   $item->package_fee,
                                "return_package_fee"        =>   $item->return_package_fee,
                                "return_courier_fee"        =>   Currency::format($item->return_courier_fee),
                                "return_courier_fee_amount"    =>   $item->return_courier_fee,
                                "return_defray"         =>   $item->return_defray,
                                "created_at"            =>   \Carbon\Carbon::parse($item->created_at)->format(\Spot\Shipment\Models\Settings::get('dateformat', true)),
                                "updated_at"            =>   \Carbon\Carbon::parse($item->updated_at)->format(\Spot\Shipment\Models\Settings::get('dateformat', true)),
                                "requested"             =>   $item->requested,
                                "barcode"               =>   $item->number
                            );

                if($item->type == 1){
                    $item_array["destination"]              =   array(
                        'lat'       =>  (($item->sender_address) ? $item->sender_address->lat : ''),
                        'lng'       =>  (($item->sender_address) ? $item->sender_address->lng : ''),
                    );
                }else{
                    $item_array["destination"]              =   array(
                        'lat'       =>  (($item->receiver_address) ? $item->receiver_address->lat : ''),
                        'lng'       =>  (($item->receiver_address) ? $item->receiver_address->lng : ''),
                    );
                }
                array_push($array, $item_array);
            }
            return response()->json($array);
        });
        Route::post('webservices/clientcreateorder', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            $language   =   (($user->language) ? $user->language : \Spot\Shipment\Models\Settings::get('language', true));
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }

            $settings       =   \Spot\Shipment\Models\Settings::instance();
            $number = '';
            for($x = 0; $x <= $settings['tracking']['numbers_order']; $x++){
                $number .= '0';
            }
            $number .= \Spot\Shipment\Models\Order::withTrashed()->max('number')+1;
            $number = substr($number, -$settings['tracking']['numbers_order']);

            $data['number']                 =   $number;

            $data['sender_id']              =   $user->id;

            if(Request::get('type')   ==   1) {
                $delivery_cost  =   $settings['fees']['pickup_cost'];
            }else{
                $delivery_cost  =   $settings['fees']['delivery_cost'];
            }
            $return_courier_fee     =   null;

            if(Request::get('return_defray') && Request::get('return_defray') != ''){
                if(Request::get('return_package_fee')  ==  1){
                    $return_courier_fee  =   $settings['fees']['delivery_cost_back_receiver'];
                }else{
                    $return_courier_fee  =   $settings['fees']['delivery_cost_back_sender'];
                }
            }

            if(Request::get('receiver_address_id') && Request::get('receiver_address_id')  !=  '' && Request::get('receiver_address_id')   !=   null && Request::get('receiver_address_id')   !=   'null' && Request::get('receiver_address_id')   !=   0) {
                $sender_address_id      =   \Spot\Shipment\Models\Address::find(Request::get('sender_address_id'));
                $receiver_address_id    =   \Spot\Shipment\Models\Address::find(Request::get('receiver_address_id'));

                if($receiver_address_id){
                    $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->county)->where('to',$receiver_address_id->county)->where('type',4)->first();
                    if(!$fees){
                        $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->city)->where('to',$receiver_address_id->city)->where('type',3)->first();
                        if(!$fees){
                            $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->state)->where('to',$receiver_address_id->state)->where('type',2)->first();
                            if(!$fees){
                                $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->country)->where('to',$receiver_address_id->country)->where('type',1)->first();
                            }
                        }
                    }

                    if($fees){
                        if(Request::get('type')   ==   1) {
                            $delivery_cost  =   $fees->pickup_cost;
                        }else{
                            $delivery_cost  =   $fees->delivery_cost;
                        }
                        if($fees->packaging == 1 && Request::get('packaging_id') && Request::get('packaging_id') != ''){
                            foreach($fees->packaging_fees as $package_fee   =>  $value){
                                if($package_fee ==  Request::get('packaging_id')){
                                    $delivery_cost  +=   $value;
                                }
                            }
                        }
                        if(Request::get('return_defray') && Request::get('return_defray') != ''){
                            if(Request::get('return_package_fee')  ==  1){
                                $return_courier_fee  =   $fees->delivery_cost_back_receiver;
                            }else{
                                $return_courier_fee  =   $fees->delivery_cost_back_sender;
                            }
                        }
                    }

                }
            }

            $data['return_courier_fee']     =   $return_courier_fee;
            $data['courier_fee']            =   $delivery_cost;
            $data['tax']                    =   $settings['taxes']['percent'];
            $data['insurance']              =   $settings['taxes']['insurance'];
            $data['customs_value']          =   0;
            $data['status_id']              =   $settings['tracking']['default_status'];
            $data['delivery_time_id']       =   $settings['tracking']['default_deliverytime'];


            $item                   = new \Spot\Shipment\Models\Order;
            $item->sender_id        = $user->id;
            $item->sender_address_id= Request::get('sender_address_id');
            $item->type             = Request::get('type');
            $item->packaging_id     = Request::get('packaging_id');
            $item->office_id        = Request::get('office_id');
            $item->ship_date        = \Carbon\Carbon::parse(Request::get('ship_date'));

            if(Request::get('type')    ==  2 or (Request::get('receiver_address_id') && Request::get('receiver_address_id')  !=  '' && Request::get('receiver_address_id')   !=   null && Request::get('receiver_address_id')   !=   'null' && Request::get('receiver_address_id')   !=   0) ){
                $item->receiver_id              = Request::get('receiver_id');
                $item->receiver_address_id      = Request::get('receiver_address_id');
            }
            $item->payment_type     = Request::get('payment_type');
            if(Request::get('return_defray') && Request::get('return_defray') != '' && Request::get('return_defray') != 2){
                $item->return_defray    = Request::get('return_defray');
                $item->package_fee      = Request::get('package_fee');
                $item->return_package_fee= Request::get('return_package_fee');
                $item->return_courier_fee= $data['return_courier_fee'];
            }
            $item->number           = $data['number'];
            $item->tax              = $data['tax'];
            $item->insurance        = $data['insurance'];
            $item->customs_value    = $data['customs_value'];
            $item->courier_fee      = $data['courier_fee'];
            $item->delivery_time_id = $data['delivery_time_id'];
            $item->status_id        = $data['status_id'];
            $item->currency_id      = \Responsiv\Currency\Models\Currency::where('is_primary', 1)->first()->id;
            $item->channel          = 'mobile';
            $item->created_at       = \Carbon\Carbon::now();
            $item->updated_at       = \Carbon\Carbon::now();
            $item->barcode          = $data['number'];
            $item->save();

            $shipdate               = \Carbon\Carbon::parse($item->ship_date);
            $deliverydate           = $shipdate->addHours($item->deliverytime->count);
            $item->delivery_date    = $deliverydate;
            $item->update();

            if(Request::get('items') && Request::get('items') != '' && !empty(Request::get('items')) && is_array(Request::get('items'))){
                foreach(Request::get('items') as $shipping_item){
                    $subitem                    = new \Spot\Shipment\Models\Item;
                    $subitem->order_id          = $item->id;
                    $subitem->category_id       = $shipping_item['category_id'];
                    $subitem->description       = $shipping_item['description'];
                    $subitem->quantity          = $shipping_item['quantity'];
                    $subitem->weight            = $shipping_item['weight'];
                    $subitem->length            = $shipping_item['length'];
                    $subitem->width             = $shipping_item['width'];
                    $subitem->height            = $shipping_item['height'];
                    $subitem->save();
                }
            }


            $theme_code     = \Cms\Classes\Theme::getActiveThemeCode();
            $theme          = \Cms\Classes\Theme::load($theme_code);
            $translator     = \RainLab\Translate\Classes\Translator::instance();
            $currentLang    = $translator->getLocale();
            $theme_lang     = $theme->getConfigArray('translate')[$currentLang];

            $event_data =   array(
                'sender'    =>  $user,
                'item'      =>  $item,
                'type'      =>  'new_shipments',
                'thumb'     =>  'icon',
                'icon'      =>  'flaticon-gift',
                'subject'   =>  $theme_lang['new_shipments'],
                'message'   =>  $theme_lang['new_shipments'],
                'url'       =>  url('dashboard/shipments/'.$item->id.'/view'),
                'badge'     =>  'success',
            );

            $activity                   = new \Spot\Shipment\Models\Activity;
            $activity->user_id          = $user->id;
            $activity->order_id         = $item->id;
            $activity->description      = 'created';
            $activity->created_at       = \Carbon\Carbon::now();
            $activity->updated_at       = \Carbon\Carbon::now();
            $activity->save();


            $array      =   [
                                "id"                    =>   $item->id,
                                "office"                =>   array(
                                                                'id'        =>  $item->office_id,
                                                                'name'      =>  (($item->office_id && $item->office_id != '' && $item->office_id != null) ? $item->office->lang($language)->name: ''),
                                                            ),
                                "number"                =>   \Spot\Shipment\Models\Settings::get('tracking', true)['prefix_order'].$item->number,
                                "type"                  =>   $item->type,
                                "sender"                =>   array(
                                                                'id'        =>  $item->sender_id,
                                                                'name'      =>  $item->sender->name,
                                                                'mobile'    =>  $item->sender->mobile,
                                                            ),
                                "sender_address"        =>   array(
                                                                'id'        =>  $item->sender_address_id,
                                                                'address'   =>  $item->sender_address->street.' '.(($item->sender_address->area) ? $item->sender_address->area->lang($language)->name: '').' '.(($item->sender_address->thecity) ? $item->sender_address->thecity->lang($language)->name: '').' '.(($item->sender_address->thestate) ? $item->sender_address->thestate->lang($language)->name: '').' '.(($item->sender_address->thecountry) ? $item->sender_address->thecountry->lang($language)->name: ''),
                                                                'lat'       =>  $item->sender_address->lat,
                                                                'lng'       =>  $item->sender_address->lng,
                                                            ),
                                "packaging"             =>   array(
                                                                'id'        =>  $item->packaging_id,
                                                                'name'      =>  $item->packaging->lang($language)->name,
                                                            ),
                                "ship_date"             =>   \Carbon\Carbon::parse($item->ship_date)->format(\Spot\Shipment\Models\Settings::get('dateformat', true)),
                                "receive_date"          =>   \Carbon\Carbon::parse($item->receive_date)->format(\Spot\Shipment\Models\Settings::get('dateformat', true)),
                                "courier"               =>   (($item->courier_id) ? $item->courier->lang($language)->name : null),
                                "delivery_time"         =>   $item->deliverytime->lang($language)->name,
                                "delivery_date"         =>   \Carbon\Carbon::parse($item->delivery_date)->format(\Spot\Shipment\Models\Settings::get('dateformat', true)),
                                "mode"                  =>   (($item->mode_id) ? $item->mode->lang($language)->name : null),
                                "status"                =>   $item->status->lang($language)->name,
                                "tax"                   =>   $item->tax,
                                "insurance"             =>   $item->insurance,
                                "currency_id"           =>   $item->currency->lang($language)->name,
                                "payment_type"          =>   $item->payment_type,
                                "customs_value"         =>   Currency::format($item->customs_value),
                                "courier_fee"           =>   Currency::format($item->courier_fee),
                                "package_fee"           =>   $item->package_fee,
                                "return_package_fee"    =>   $item->return_package_fee,
                                "return_courier_fee"    =>   $item->return_courier_fee,
                                "return_defray"         =>   $item->return_defray,
                                "created_at"            =>   \Carbon\Carbon::parse($item->created_at)->format(\Spot\Shipment\Models\Settings::get('dateformat', true)),
                                "updated_at"            =>   \Carbon\Carbon::parse($item->updated_at)->format(\Spot\Shipment\Models\Settings::get('dateformat', true)),
                                "requested"             =>   $item->requested,
                                "barcode"               =>   $item->number
                            ];
            if($item->manifest_id){
                $array["manifest"]                      =   array(
                                                                'id'        =>  $item->manifest_id,
                                                            );
            }
            if($item->assigned_id){
                $array["assigned"]                      =   array(
                                                                'id'        =>  $item->assigned_id,
                                                            );
            }
            if($item->receiver_id and $item->receiver){
                $array["receiver"]                      =   array(
                                                                'id'        =>  $item->receiver_id,
                                                                'name'      =>  $item->receiver->name,
                                                                'mobile'    =>  $item->receiver->mobile,
                                                            );
                $array["receiver_address"]              =   array(
                                                                'id'        =>  $item->receiver_address_id,
                                                                'address'   =>  $item->receiver_address->street.' '.(($item->receiver_address->area) ? $item->receiver_address->area->lang($language)->name: '').' '.(($item->receiver_address->thecity) ? $item->receiver_address->thecity->lang($language)->name: '').' '.(($item->receiver_address->thestate) ? $item->receiver_address->thestate->lang($language)->name: '').' '.(($item->receiver_address->thecountry) ? $item->receiver_address->thecountry->lang($language)->name: ''),
                                                                'lat'       =>  $item->receiver_address->lat,
                                                                'lng'       =>  $item->receiver_address->lng,
                                                            );
            }

            return response()->json($array);
        });
        Route::post('webservices/createaddress', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            $language   =   (($user->language) ? $user->language : \Spot\Shipment\Models\Settings::get('language', true));
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }

            $subitem                    = new \Spot\Shipment\Models\Address;
            $subitem->user_id           = ((Request::get('user_id')) ? Request::get('user_id') : $userModel->id);
            $subitem->name              = Request::get('address_name');
            $subitem->street            = Request::get('address_name');
            $subitem->lat               = ((Request::get('lat')) ? Request::get('lat') : null);
            $subitem->lng               = ((Request::get('lng')) ? Request::get('lng') : null);
            $subitem->county            = Request::get('area_id');
            $subitem->city              = Request::get('city_id');
            $subitem->zipcode           = ((Request::get('postal_code')) ? Request::get('postal_code') : null);
            $subitem->state             = Request::get('state_id');
            $subitem->country           = Request::get('country_id');
            $subitem->created_at        = \Carbon\Carbon::now();
            $subitem->updated_at        = \Carbon\Carbon::now();
            $subitem->save();

            return response()->json($subitem);
        });
        Route::get('webservices/searchuser', function (\Request $request) {
            $search     =   Request::get('term');

            $records    =   \RainLab\User\Models\User::where('role_id', 5);
            $records    =   $records->where(function($q) use($search){
                $q->where('name', 'like', "%$search%")
                ->orWhere('username', $search)
                ->orWhere('mobile', $search)
                ->orWhere('email', $search);
            });
            $records    =   $records->select('id','name','mobile')->get()->toArray();
            return response()->json($records);
        })->middleware('web');
        Route::get('webservices/useraddresses', function (\Request $request) {
            if(Request::get('user_id')){
                $records    =   \Spot\Shipment\Models\Address::where('user_id', Request::get('user_id'))->get()->toArray();
                return response()->json($records);
            }else{
                return response()->json(['error' => 'not_authorised'], 405);
            }
        })->middleware('web');
        Route::post('webservices/newuser', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            $language   =   (($user->language) ? $user->language : \Spot\Shipment\Models\Settings::get('language', true));
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }


            $theme_code     = \Cms\Classes\Theme::getActiveThemeCode();
            $theme          = \Cms\Classes\Theme::load($theme_code);
            $translator     = \RainLab\Translate\Classes\Translator::instance();
            $currentLang    = $translator->getLocale();
            $theme_lang     = $theme->getConfigArray('translate')[$currentLang];


            \RainLab\User\Models\User::extend(function($model) use($theme_lang){
                $myrules['mobile'] = 'required|unique:users';
                $myrules['password'] = 'required';
                $model->rules = $myrules;
                $model->customMessages['mobile.mobile'] = $theme_lang['mobile_already_registered'];
            });
            $item                   = new \RainLab\User\Models\User;
            $item->name             = Request::get('name');
            $password                       = \Hash::make(123);
            $item->password                 = $password;
            $item->password_confirmation    = $password;
            $item->mobile           = Request::get('mobile');
            $item->role_id          = 5;
            $item->created_at       = \Carbon\Carbon::now();
            $item->updated_at       = \Carbon\Carbon::now();
            $item->save();

            $array  =   [
                'id'    =>  $item->id,
                'name'  =>  $item->name,
            ];
            return response()->json($array);
        })->middleware('web');
        Route::post('webservices/devicetoken', function (\Request $request) {
            $token      =   Request::get('token');
            $device     =   Request::get('devicetoken');
            $user       =   JWTAuth::authenticate($token);
            $language   =   (($user->language) ? $user->language : \Spot\Shipment\Models\Settings::get('language', true));
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }

            $user->devicetoken  =   Request::get('devicetoken');
            $user->updated_at       = \Carbon\Carbon::now();
            $user->update();

            return response()->json(['success' => 'ok'], 200);
        });
        Route::post('webservices/language', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            $language   =   (($user->language) ? $user->language : \Spot\Shipment\Models\Settings::get('language', true));
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }

            $user->language         = Request::get('lang');
            $user->updated_at       = \Carbon\Carbon::now();
            $user->update();

            return response()->json(['success' => 'ok'], 200);
        });
    /********************************************/
    /*              EMPLOYEE APP                 */
    /********************************************/
        Route::post('webservices/employeelogin', function (Request $request) {
            $credentials = [
                'username' => Request::get('username'),
                'password' => Request::get('password'),
            ];

            try {
                // verify the credentials and create a token for the user
                if (! $token = JWTAuth::attempt($credentials)) {
                    return response()->json(['error' => 'invalid_credentials'], 401);
                }
            } catch (JWTException $e) {
                // something went wrong
                return response()->json(['error' => 'could_not_create_token'], 500);
            }

            $userModel = JWTAuth::authenticate($token);

            if(!in_array($userModel->role_id,[3,4,6])) {
                return response()->json(['error' => 'invalid_credentials'], 401);
            }

            $user = [
                'id' => $userModel->id,
                'name' => $userModel->name,
                'surname' => $userModel->surname,
                'username' => $userModel->username,
                'email' => $userModel->email,
                'mobile' => $userModel->mobile,
                'language' => (($userModel->language) ? $userModel->language : 'en'),
            ];
            // if no errors are encountered we can return a JWT
            return response()->json(compact('token', 'user'));
        });
        Route::post('webservices/updatelocation', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            $language   =   (($user->language) ? $user->language : \Spot\Shipment\Models\Settings::get('language', true));
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }

            $item                   = new \Spot\Shipment\Models\Tracking;
            $item->user_id          = $user->id;
            $item->lng              = Request::get('lat');
            $item->lat              = Request::get('lng');
            $item->created_at       = \Carbon\Carbon::now();
            $item->updated_at       = \Carbon\Carbon::now();
            $item->save();

            return response()->json(['success' => 'ok'], 200);
        });
        Route::post('webservices/confirm', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            $language   =   (($user->language) ? $user->language : \Spot\Shipment\Models\Settings::get('language', true));
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }

            $settings       =   \Spot\Shipment\Models\Settings::instance();

            $item                       =   \Spot\Shipment\Models\Order::find(Request::get('id'));
            $sender_fees                =   $receiver_fees  =   0;
            $delivery_cost              =   $item->courier_fee;

            if($item->payment_type  ==  1){
                $receiver_fees          =   $delivery_cost;
            }else{
                $sender_fees            =   $delivery_cost;
            }
            if(Request::get('receiver_address_id') && Request::get('receiver_address_id')   !=   '') {
                $sender_address_id      =   \Spot\Shipment\Models\Address::find($item->sender_address_id);
                $receiver_address_id    =   \Spot\Shipment\Models\Address::find(Request::get('receiver_address_id'));
                if($sender_address_id && $receiver_address_id){
                    $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->county)->where('to',$receiver_address_id->county)->where('type',4)->first();
                    if(!$fees){
                        $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->city)->where('to',$receiver_address_id->city)->where('type',3)->first();
                        if(!$fees){
                            $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->state)->where('to',$receiver_address_id->state)->where('type',2)->first();
                            if(!$fees){
                                $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->country)->where('to',$receiver_address_id->country)->where('type',1)->first();
                            }
                        }
                    }
                }else{
                    $fees == null;
                }

                if($fees){
                    if($item->type   ==   1 && $item->receiver_address_id == null) {
                        $delivery_cost  +=   $fees->delivery_cost;
                    }
                    if($fees->packaging == 1 && isset($item->packaging_id) && $item->packaging_id != ''){
                        foreach($fees->packaging_fees as $package_fee   =>  $value){
                            if($package_fee ==  $item->packaging_id){
                                $delivery_cost  +=   $value;
                            }
                        }
                    }
                }else{
                    if($item->type   ==   1 && $item->receiver_address_id == null) {
                        $delivery_cost  +=   $settings['fees']['delivery_cost'];
                    }
                }
                if($item->payment_type  ==  1){
                    $receiver_fees          =   $delivery_cost;
                }else{
                    $sender_fees            =   $delivery_cost;
                }
                if(Request::get('return_defray') && Request::get('return_defray') != '' && Request::get('return_defray') != 2 && Request::get('return_defray') != null){
                    if(Request::get('return_courier_fee') && Request::get('return_courier_fee') != 'null'){
                        $delivery_cost  +=   htmlspecialchars(Request::get('return_courier_fee'));
                        if(Request::get('return_package_fee')  ==  2){
                            $sender_fees        +=   htmlspecialchars(Request::get('return_courier_fee'));
                        }else{
                            $receiver_fees      +=   htmlspecialchars(Request::get('return_courier_fee'));
                        }
                    }
                }

                if(Request::get('package_fee') && Request::get('package_fee') != ''){
                    if(Request::get('package_fee') && Request::get('package_fee') != 'null' ){
                        $receiver_fees      +=   htmlspecialchars(Request::get('package_fee'));
                    }
                }

            }

            $array   =   array(
                            'delivery_cost'         =>  Currency::format($delivery_cost),
                            'sender_fees'           =>  Currency::format($sender_fees),
                            'receiver_fees'         =>  Currency::format($receiver_fees),
                        );
            return response()->json($array);
        });
        Route::post('webservices/receive', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            $language   =   (($user->language) ? $user->language : \Spot\Shipment\Models\Settings::get('language', true));
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }


            $theme_code     = \Cms\Classes\Theme::getActiveThemeCode();
            $theme          = \Cms\Classes\Theme::load($theme_code);
            $translator     = \RainLab\Translate\Classes\Translator::instance();
            $currentLang    = $translator->getLocale();
            $theme_lang     = $theme->getConfigArray('translate')[$currentLang];

            $settings       =   \Spot\Shipment\Models\Settings::instance();

            $item                       = \Spot\Shipment\Models\Order::find(Request::get('id'));


            if($item->assigned_id){
                $responsiable   =   $item->assigned_id;
            }elseif($item->manifest_id){
                if($item->manifest->driver_id){
                    $responsiable   =   $item->manifest->driver_id;
                }elseif($item->manifest->employee_id){
                    $responsiable   =   $item->manifest->employee_id;
                }else{
                    $responsiable   =   $user->id;
                }
            }else{
                $responsiable   =   $user->id;
            }


            $sender_fees                =   $receiver_fees  =   0;

            $sender_fees                =   $receiver_fees  =   0;
            $delivery_cost              =   ((Request::get('courier_fee') && Request::get('courier_fee') != '') ? Request::get('courier_fee') : $item->courier_fee);

            if($item->payment_type  ==  1){
                $receiver_fees          =   $delivery_cost;
            }else{
                $sender_fees            =   $delivery_cost;
            }

            if(Request::get('receiver_address_id') && Request::get('receiver_address_id')   !=   '') {
                $sender_address_id      =   \Spot\Shipment\Models\Address::find($item->sender_address_id);
                $receiver_address_id    =   \Spot\Shipment\Models\Address::find(Request::get('receiver_address_id'));

                $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->county)->where('to',$receiver_address_id->county)->where('type',4)->first();
                if(!$fees){
                    $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->city)->where('to',$receiver_address_id->city)->where('type',3)->first();
                    if(!$fees){
                        $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->state)->where('to',$receiver_address_id->state)->where('type',2)->first();
                        if(!$fees){
                            $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->country)->where('to',$receiver_address_id->country)->where('type',1)->first();
                        }
                    }
                }

                if($fees){
                    if($item->type   ==   1 && $item->receiver_address_id == null) {
                        $delivery_cost  +=   $fees->delivery_cost;
                    }
                    if($fees->packaging == 1 && isset($item->packaging_id) && $item->packaging_id != ''){
                        foreach($fees->packaging_fees as $package_fee   =>  $value){
                            if($package_fee ==  $item->packaging_id){
                                $delivery_cost  +=   $value;
                            }
                        }
                    }
                }else{
                    if($item->type   ==   1 && $item->receiver_address_id == null) {
                        $delivery_cost  +=   $settings['fees']['delivery_cost'];
                    }
                }
                if($item->payment_type  ==  1){
                    $receiver_fees          =   $delivery_cost;
                }else{
                    $sender_fees            =   $delivery_cost;
                }
                if(Request::get('return_defray') && Request::get('return_defray') != '' && Request::get('return_defray') != 2){
                    //$delivery_cost  +=   htmlspecialchars($data['return_courier_fee']);
                    if(Request::get('return_package_fee')  ==  2){
                        $sender_fees        +=   htmlspecialchars(Request::get('return_courier_fee'));
                    }else{
                        $receiver_fees      +=   htmlspecialchars(Request::get('return_courier_fee'));
                    }
                }

                if(Request::get('package_fee') && Request::get('package_fee') != ''){
                    $receiver_fees      +=   htmlspecialchars(Request::get('package_fee'));
                }

            }


            if($item->type     ==   1){

                $item->requested            = 9;
                $status                     = \Spot\Shipment\Models\Status::where('equal', 9)->first();
                $type                       = 'received';
                if($status){
                    $item->status           = $status->id;
                }
                $item->type                 = 2;
                $item->receiver_id          = htmlspecialchars(Request::get('receiver_id'));
                $item->receiver_address_id  = htmlspecialchars(Request::get('receiver_address_id'));
                if(Request::get('return_defray') && Request::get('return_defray') != '' && Request::get('return_defray') != 2){
                    $item->return_defray    = htmlspecialchars(Request::get('return_defray'));
                    $item->package_fee      = htmlspecialchars(Request::get('package_fee'));
                    $item->return_package_fee= htmlspecialchars(Request::get('return_package_fee'));
                    $item->return_courier_fee= htmlspecialchars(Request::get('return_courier_fee'));
                }
                $item->courier_fee          = $delivery_cost;
                $item->updated_at           = \Carbon\Carbon::now();
                $item->update();




                if($item->assigned_id != null){
                    $employee_id    =   $item->assigned_id;
                }elseif($item->manifest_id != null){
                    if($item->manifest->driver_id){
                        $employee_id   =   $item->manifest->driver_id;
                    }elseif($item->manifest->employee_id){
                        $employee_id   =   $item->manifest->employee_id;
                    }else{
                        $employee_id   =   $user->id;
                    }
                }else{
                    $employee_id   =   $user->id;
                }



                if($item->payment_type  ==  2){
                    $total                      = $item->courier_fee+$item->customs_value;
                    $total                      = $total+($item->tax*$item->courier_fee/100);
                    $total                      = $total+($item->insurance*$item->courier_fee/100);
                    if($item->return_package_fee == 1){
                        $total                  += $item->return_courier_fee;
                    }
                    if($item->return_defray == 1){
                        $total                  += $item->package_fee;
                    }
                    if($item->customs_value != 0){
                        $payment                    = new \Spot\Shipment\Models\Payment;
                        $payment->type              = 1;
                        $payment->payment_type      = 'customs';
                        $payment->item_id           = $item->id;
                        $payment->for_id            = $item->sender_id;
                        $payment->payment_with      = $employee_id;
                        $payment->movement          = 8; //Add  to the balance of packages
                        $payment->amount            = $item->customs_value;
                        $payment->status            = 3;
                        $payment->date              = \Carbon\Carbon::now();
                        $payment->created_at        = \Carbon\Carbon::now();
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->save();
                    }
                    if($item->tax != 0){
                        $payment                    = new \Spot\Shipment\Models\Payment;
                        $payment->type              = 1;
                        $payment->payment_type      = 'tax';
                        $payment->item_id           = $item->id;
                        $payment->for_id            = $item->sender_id;
                        $payment->payment_with      = $employee_id;
                        $payment->status            = 3;
                        $payment->movement          = 8; //Add  to the balance of packages
                        $payment->amount            = ($item->tax*$item->courier_fee/100);
                        $payment->date              = \Carbon\Carbon::now();
                        $payment->created_at        = \Carbon\Carbon::now();
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->save();
                    }
                    if($item->insurance != 0){
                        $payment                    = new \Spot\Shipment\Models\Payment;
                        $payment->type              = 1;
                        $payment->payment_type      = 'insurance';
                        $payment->item_id           = $item->id;
                        $payment->for_id            = $item->sender_id;
                        $payment->payment_with      = $employee_id;
                        $payment->movement          = 8; //Add  to the balance of packages
                        $payment->status            = 3;
                        $payment->amount            = '-'.($item->insurance*$item->courier_fee/100);
                        $payment->date              = \Carbon\Carbon::now();
                        $payment->created_at        = \Carbon\Carbon::now();
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->save();
                    }


                    $payment                    = new \Spot\Shipment\Models\Payment;
                    $payment->type              = 1;
                    $payment->item_id           = $item->id;
                    $payment->payment_type      = 'courier_fee';
                    $payment->for_id            = $item->sender_id;
                    $payment->payment_with      = $employee_id;
                    $payment->movement          = 8; //Add  to the balance of packages
                    $payment->status            = 3;
                    $payment->amount            = $item->courier_fee;
                    $payment->date              = \Carbon\Carbon::now();
                    $payment->created_at        = \Carbon\Carbon::now();
                    $payment->updated_at        = \Carbon\Carbon::now();
                    $payment->save();

                    if($item->return_package_fee == 2 && $item->return_courier_fee){
                        $payment                    = new \Spot\Shipment\Models\Payment;
                        $payment->type              = 1;
                        $payment->item_id           = $item->id;
                        $payment->payment_type      = 'return_package_fee';
                        $payment->for_id            = $item->sender_id;
                        $payment->payment_with      = $employee_id;
                        $payment->movement          = 8; //Add  to the balance of packages
                        $payment->status            = 3;
                        $payment->amount            = $item->return_courier_fee;
                        $payment->date              = \Carbon\Carbon::now();
                        $payment->created_at        = \Carbon\Carbon::now();
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->save();
                    }
                }
            }


            $event_data =   array(
                'sender'                =>  $user,
                'shipping_sender'       =>  $item->sender_id,
                'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
                'shipping_responsible'  =>  $responsiable,
                'item'                  =>  $item,
                'type'                  =>  $type,
                'thumb'                 =>  'icon',
                'icon'                  =>  'flaticon-gift',
                'subject'               =>  $theme_lang[$type],
                'message'               =>  $theme_lang[$type],
                'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
                'badge'                 =>  'success',
            );

            $pusher = '';
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
            }
            \Event::fire('spot.event', [$pusher,$settings,$event_data]);

            if($user->devicetoken){
                $content = array(
                    "en" => $theme_lang[$type]
                );
                $heading = array(
                    "en" => $theme_lang[$type]
                );

                /* ANDROID */
                /*
                $fields = array(
                    //TODO : change the app_id to be a settings
                   'app_id' => 'cbbde828-1e60-4530-83e2-b68b0079c4e0',
                   'include_player_ids' => [$user->devicetoken],
                   //'included_segments' => array('All'),
                   //'included_segments' => array('Doctors'),
                   'data' => array(
                       "number"  => 1,
                   ),
                   //'url' => 'http://www.yoursite.com',
                   'contents' => $content,
                   'headings' => $heading
                );
                */

                //for fcm
                $fields = array(
                        "registration_ids" => array($user->devicetoken),
                        //"token" => [$userModel->devicetoken],
                        "notification" => array(
                            "body"  => $content,
                            "title" => $heading
                        ),
                        "data" => array(
                            "number" =>(($event_data['item'] && isset($event_data['item']->number)) ? $event_data['item']->number : null)
                        )
                    );

                $fields = json_encode($fields);

                $ch = curl_init();

                /*
                curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic Y2M4MGI4YzAtOWEyYy00MTc2LTk4NDMtMjNlNDc3YThkZDFk'));
                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                */

                $settings       =   \Spot\Shipment\Models\Settings::instance();

                //for fcm
                curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/fcm/send");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
                                                           'Authorization: key='.$settings->notifications['fcm']['employee_key']));
                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

                $response = curl_exec($ch);
                curl_close($ch);
            }

            $activity                   = new \Spot\Shipment\Models\Activity;
            $activity->user_id          = $user->id;
            $activity->order_id         = $item->id;
            $activity->description      = $type;
            if(Request::get('lat')){
                $activity->lat              = Request::get('lat');
                $activity->lng              = Request::get('lng');
            }
            if(Request::get('message')){
                $activity->other            = htmlspecialchars(Request::get('message'));
            }
            $activity->created_at       = \Carbon\Carbon::now();
            $activity->updated_at       = \Carbon\Carbon::now();
            $activity->save();

            return response()->json(['success' => 'ok'], 200);
        });
        Route::post('webservices/deliver', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            $language   =   (($user->language) ? $user->language : \Spot\Shipment\Models\Settings::get('language', true));
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }


            $theme_code     = \Cms\Classes\Theme::getActiveThemeCode();
            $theme          = \Cms\Classes\Theme::load($theme_code);
            $translator     = \RainLab\Translate\Classes\Translator::instance();
            $currentLang    = $translator->getLocale();
            $theme_lang     = $theme->getConfigArray('translate')[$currentLang];

            $settings       =   \Spot\Shipment\Models\Settings::instance();

            $item                       = \Spot\Shipment\Models\Order::find(Request::get('id'));


            if($item->assigned_id){
                $responsiable   =   $item->assigned_id;
            }elseif($item->manifest_id){
                if($item->manifest->driver_id){
                    $responsiable   =   $item->manifest->driver_id;
                }elseif($item->manifest->employee_id){
                    $responsiable   =   $item->manifest->employee_id;
                }else{
                    $responsiable   =   $user->id;
                }
            }else{
                $responsiable   =   $user->id;
            }

            $item->requested        = 4;
            $item->postponed        = null;
            $status                 = \Spot\Shipment\Models\Status::where('equal', 4)->first();
            $type                   = 'delivered';
            if($status){
                $item->status           = $status->id;
            }

            $employee_id            = $item->assigned_id;
            $employeeorder          = \Spot\Shipment\Models\Employeeorder::where('order_id', $item->id)->first();
            if($employeeorder){
                $employee_id            = $employeeorder->employee_id;
                $employeeorder->delete();
            }

            if($item->payment_type  ==  2){

                $total                      = $item->courier_fee+$item->customs_value;
                $total                      = $total+($item->tax*$item->courier_fee/100);
                $total                      = $total+($item->insurance*$item->courier_fee/100);
                if($item->return_package_fee == 1){
                    $total                  += $item->return_courier_fee;
                }
                if($item->return_defray == 1){
                    $total                  += $item->package_fee;
                }
                if($item->customs_value != 0){
                    $payment                    = new \Spot\Shipment\Models\Payment;
                    $payment->type              = 1;
                    $payment->payment_type      = 'customs';
                    $payment->item_id           = $item->id;
                    $payment->for_id            = $item->sender_id;
                    $payment->payment_with      = $employee_id;
                    $payment->movement          = 8; //Add  to the balance of packages
                    $payment->amount            = $item->customs_value;
                    $payment->date              = \Carbon\Carbon::now();
                    $payment->created_at        = \Carbon\Carbon::now();
                    $payment->updated_at        = \Carbon\Carbon::now();
                    $payment->save();
                }
                if($item->tax != 0){
                    $payment                    = new \Spot\Shipment\Models\Payment;
                    $payment->type              = 1;
                    $payment->payment_type      = 'tax';
                    $payment->item_id           = $item->id;
                    $payment->for_id            = $item->sender_id;
                    $payment->payment_with      = $employee_id;
                    $payment->movement          = 8; //Add  to the balance of packages
                    $payment->amount            = ($item->tax*$item->courier_fee/100);
                    $payment->date              = \Carbon\Carbon::now();
                    $payment->created_at        = \Carbon\Carbon::now();
                    $payment->updated_at        = \Carbon\Carbon::now();
                    $payment->save();
                }
                if($item->insurance != 0){
                    $payment                    = new \Spot\Shipment\Models\Payment;
                    $payment->type              = 1;
                    $payment->payment_type      = 'insurance';
                    $payment->item_id           = $item->id;
                    $payment->for_id            = $item->sender_id;
                    $payment->payment_with      = $employee_id;
                    $payment->movement          = 8; //Add  to the balance of packages
                    $payment->amount            = '-'.($item->insurance*$item->courier_fee/100);
                    $payment->date              = \Carbon\Carbon::now();
                    $payment->created_at        = \Carbon\Carbon::now();
                    $payment->updated_at        = \Carbon\Carbon::now();
                    $payment->save();
                }


                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->item_id           = $item->id;
                $payment->payment_type      = 'courier_fee';
                $payment->for_id            = $item->sender_id;
                $payment->payment_with      = $employee_id;
                $payment->movement          = 8; //Add  to the balance of packages
                $payment->amount            = $item->courier_fee;
                $payment->date              = \Carbon\Carbon::now();
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();


                if($item->return_defray == 1){
                    $payment                    = new \Spot\Shipment\Models\Payment;
                    $payment->type              = 1;
                    $payment->item_id           = $item->id;
                    $payment->payment_type      = 'package_fee';
                    $payment->for_id            = $item->sender_id;
                    $payment->payment_with      = $employee_id;
                    $payment->movement          = 8; //Add  to the balance of packages
                    $payment->amount            = $item->package_fee;
                    $payment->date              = \Carbon\Carbon::now();
                    $payment->created_at        = \Carbon\Carbon::now();
                    $payment->updated_at        = \Carbon\Carbon::now();
                    $payment->save();

                    if($item->return_package_fee == 1){
                        $payment                    = new \Spot\Shipment\Models\Payment;
                        $payment->type              = 1;
                        $payment->item_id           = $item->id;
                        $payment->payment_type      = 'return_package_fee';
                        $payment->for_id            = $item->sender_id;
                        $payment->payment_with      = $employee_id;
                        $payment->movement          = 8; //Add  to the balance of packages
                        $payment->amount            = $item->return_courier_fee;
                        $payment->date              = \Carbon\Carbon::now();
                        $payment->created_at        = \Carbon\Carbon::now();
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->save();
                    }
                }

            }else{

                $payment                    = new \Spot\Shipment\Models\Payment;
                $payment->type              = 1;
                $payment->item_id           = $item->id;
                $payment->payment_type      = 'courier_fee';
                $payment->for_id            = $item->sender_id;
                $payment->payment_with      = $employee_id;
                $payment->movement          = 8; //Add  to the balance of packages
                $payment->amount            = $item->courier_fee;
                $payment->date              = \Carbon\Carbon::now();
                $payment->created_at        = \Carbon\Carbon::now();
                $payment->updated_at        = \Carbon\Carbon::now();
                $payment->save();

                if($item->return_defray == 1){
                    $payment                    = new \Spot\Shipment\Models\Payment;
                    $payment->type              = 1;
                    $payment->item_id           = $item->id;
                    $payment->payment_type      = 'package_fee';
                    $payment->for_id            = $item->sender_id;
                    $payment->payment_with      = $employee_id;
                    $payment->movement          = 8; //Add  to the balance of packages
                    $payment->amount            = $item->package_fee;
                    $payment->date              = \Carbon\Carbon::now();
                    $payment->created_at        = \Carbon\Carbon::now();
                    $payment->updated_at        = \Carbon\Carbon::now();
                    $payment->save();

                    $payment                    = new \Spot\Shipment\Models\Payment;
                    $payment->type              = 1;
                    $payment->item_id           = $item->id;
                    $payment->payment_type      = 'package_fee';
                    $payment->for_id            = $item->sender_id;
                    $payment->movement          = 4;
                    $payment->amount            = $item->package_fee;
                    $payment->date              = \Carbon\Carbon::now();
                    $payment->created_at        = \Carbon\Carbon::now();
                    $payment->updated_at        = \Carbon\Carbon::now();
                    $payment->save();

                    if($item->return_package_fee == 1){
                        $payment                    = new \Spot\Shipment\Models\Payment;
                        $payment->type              = 1;
                        $payment->item_id           = $item->id;
                        $payment->payment_type      = 'return_package_fee';
                        $payment->for_id            = $item->sender_id;
                        $payment->payment_with      = $employee_id;
                        $payment->movement          = 8; //Add  to the balance of packages
                        $payment->amount            = $item->return_courier_fee;
                        $payment->date              = \Carbon\Carbon::now();
                        $payment->created_at        = \Carbon\Carbon::now();
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->save();
                    }
                }
            }

            if(Request::get('copy')){
                $img = Request::get('copy');
                $img = str_replace('data:image/jpeg;base64,', '', $img);
                $img = str_replace(' ', '+', $img);
                $imageData = base64_decode($img);

                // we got raw data of file now we can convert this row data to file in dist and add that to `File` model
                $file = (new \System\Models\File)->fromData($imageData, rand().'.jpeg');


                $order  =   \Spot\Shipment\Models\Order::find($item->id);
                $order->id_copy()->add($file);
            }

            if(Request::get('package_before')){
                $img = Request::get('package_before');
                $img = str_replace('data:image/jpeg;base64,', '', $img);
                $img = str_replace(' ', '+', $img);
                $imageData = base64_decode($img);

                // we got raw data of file now we can convert this row data to file in dist and add that to `File` model
                $file = (new \System\Models\File)->fromData($imageData, rand().'.jpeg');


                $order  =   \Spot\Shipment\Models\Order::find($item->id);
                $order->package_before()->add($file);
            }
            /*
            $file = new \System\Models\File;
            $file->data = \Input::file('signature');
            $file->save();

            $signature_type = pathinfo($file->getPath(), PATHINFO_EXTENSION);
            $signature_data = file_get_contents($file->getPath());
            $signature_base64 = 'data:image/' . $signature_type . ';base64,' . base64_encode($signature_data);
            */

            if(Request::get('package_before')){
                $item->esign            = Request::get('signature');
            }
            $item->delivered_by     = $employee_id;
            $item->delivered_responsiable     = $user->id;
            $item->received_by      = htmlspecialchars(Request::get('receiver'));
            $item->updated_at       = \Carbon\Carbon::now();
            $item->update();



            if(Request::get('note') && Request::get('note') != ''){
                $data = post();
                $note                               = new \Spot\Shipment\Models\Notes;
                $note->user_id                      = $user->id;
                $note->item_id                      = $item->id;
                $note->item_type                    = 1;
                $note->content                      = Request::get('note');
                $note->created_at                   = \Carbon\Carbon::now();
                $note->updated_at                   = \Carbon\Carbon::now();
                $note->save();
            }


            $event_data =   array(
                'sender'                =>  $user,
                'shipping_sender'       =>  $item->sender_id,
                'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
                'shipping_responsible'  =>  $responsiable,
                'item'                  =>  $item,
                'type'                  =>  $type,
                'thumb'                 =>  'icon',
                'icon'                  =>  'flaticon-gift',
                'subject'               =>  $theme_lang[$type],
                'message'               =>  $theme_lang[$type],
                'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
                'badge'                 =>  'success',
            );

            $pusher = '';
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
            }
            \Event::fire('spot.event', [$pusher,$settings,$event_data]);

            if($user->devicetoken){
                $content = array(
                    "en" => $theme_lang[$type]
                );
                $heading = array(
                    "en" => $theme_lang[$type]
                );

                /* ANDROID */
                /*
                $fields = array(
                    //TODO : change the app_id to be a settings
                   'app_id' => 'cbbde828-1e60-4530-83e2-b68b0079c4e0',
                   'include_player_ids' => [$user->devicetoken],
                   //'included_segments' => array('All'),
                   //'included_segments' => array('Doctors'),
                   'data' => array(
                       "number"  => 1,
                   ),
                   //'url' => 'http://www.yoursite.com',
                   'contents' => $content,
                   'headings' => $heading
                );
                */
                //for fcm
                $fields = array(
                        "registration_ids" => array($user->devicetoken),
                        //"token" => [$userModel->devicetoken],
                        "notification" => array(
                            "body"  => $content,
                            "title" => $heading
                        ),
                        "data" => array(
                            "number" =>(($event_data['item'] && isset($event_data['item']->number)) ? $event_data['item']->number : null)
                        )
                    );

                $fields = json_encode($fields);

                $ch = curl_init();
                /*
                curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic Y2M4MGI4YzAtOWEyYy00MTc2LTk4NDMtMjNlNDc3YThkZDFk'));
                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                */

                $settings       =   \Spot\Shipment\Models\Settings::instance();

                //for fcm
                curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/fcm/send");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
                                                           'Authorization: key='.$settings->notifications['fcm']['employee_key']));
                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

                $response = curl_exec($ch);
                curl_close($ch);
            }

            $activity                   = new \Spot\Shipment\Models\Activity;
            $activity->user_id          = $user->id;
            $activity->order_id         = $item->id;
            $activity->description      = $type;
            if(Request::get('lat')){
                $activity->lat              = Request::get('lat');
                $activity->lng              = Request::get('lng');
            }
            if(Request::get('message')){
                $activity->other            = htmlspecialchars(Request::get('message'));
            }
            $activity->created_at       = \Carbon\Carbon::now();
            $activity->updated_at       = \Carbon\Carbon::now();
            $activity->save();

            return response()->json(['success' => 'ok'], 200);
        })->middleware('web');
        Route::post('webservices/postponed', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            $language   =   (($user->language) ? $user->language : \Spot\Shipment\Models\Settings::get('language', true));
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }


            $theme_code     = \Cms\Classes\Theme::getActiveThemeCode();
            $theme          = \Cms\Classes\Theme::load($theme_code);
            $translator     = \RainLab\Translate\Classes\Translator::instance();
            $currentLang    = $translator->getLocale();
            $theme_lang     = $theme->getConfigArray('translate')[$currentLang];

            $settings       =   \Spot\Shipment\Models\Settings::instance();

            $item           = \Spot\Shipment\Models\Order::find(Request::get('id'));


            $item->delivery_date    = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat(('Y-m-d'), Request::get('ship_date')));
            $item->postponed        = 1;
            $item->updated_at       = \Carbon\Carbon::now();
            $item->update();

            if($item->assigned_id){
                $responsiable   =   $item->assigned_id;
            }elseif($item->manifest_id){
                if($item->manifest->driver_id){
                    $responsiable   =   $item->manifest->driver_id;
                }elseif($item->manifest->employee_id){
                    $responsiable   =   $item->manifest->employee_id;
                }else{
                    $responsiable   =   $user->id;
                }
            }else{
                $responsiable   =   $user->id;
            }

            $type = 'postponed_shipment';

            $event_data =   array(
                'sender'                =>  $user,
                'shipping_sender'       =>  $item->sender_id,
                'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
                'shipping_responsible'  =>  $responsiable,
                'item'                  =>  $item,
                'type'                  =>  $type,
                'thumb'                 =>  'icon',
                'icon'                  =>  'flaticon-gift',
                'subject'               =>  $theme_lang[$type],
                'message'               =>  $theme_lang[$type],
                'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
                'badge'                 =>  'success',
            );

            $pusher = '';
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
            }
            \Event::fire('spot.event', [$pusher,$settings,$event_data]);

            if($user->devicetoken){
                $content = array(
                    "en" => $theme_lang[$type]
                );
                $heading = array(
                    "en" => $theme_lang[$type]
                );

                /* ANDROID */
                /*
                $fields = array(
                    //TODO : change the app_id to be a settings
                   'app_id' => 'cbbde828-1e60-4530-83e2-b68b0079c4e0',
                   'include_player_ids' => [$user->devicetoken],
                   //'included_segments' => array('All'),
                   //'included_segments' => array('Doctors'),
                   'data' => array(
                       "number"  => 1,
                   ),
                   //'url' => 'http://www.yoursite.com',
                   'contents' => $content,
                   'headings' => $heading
                );
                */
                //for fcm
                $fields = array(
                        "registration_ids" => array($user->devicetoken),
                        //"token" => [$userModel->devicetoken],
                        "notification" => array(
                            "body"  => $content,
                            "title" => $heading
                        ),
                        "data" => array(
                            "number" =>(($event_data['item'] && isset($event_data['item']->number)) ? $event_data['item']->number : null)
                        )
                    );

                $fields = json_encode($fields);

                $ch = curl_init();
                /*
                curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic Y2M4MGI4YzAtOWEyYy00MTc2LTk4NDMtMjNlNDc3YThkZDFk'));
                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                */

                 $settings       =   \Spot\Shipment\Models\Settings::instance();

                //for fcm
                curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/fcm/send");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
                                                           'Authorization: key='.$settings->notifications['fcm']['employee_key']));
                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

                $response = curl_exec($ch);
                curl_close($ch);
            }

            $activity                   = new \Spot\Shipment\Models\Activity;
            $activity->user_id          = $user->id;
            $activity->order_id         = $item->id;
            $activity->description      = $type;
            if(Request::get('lat')){
                $activity->lat              = Request::get('lat');
                $activity->lng              = Request::get('lng');
            }
            if(Request::get('message')){
                $activity->other            = htmlspecialchars(Request::get('message'));
            }
            $activity->created_at       = \Carbon\Carbon::now();
            $activity->updated_at       = \Carbon\Carbon::now();
            $activity->save();

            return response()->json(['success' => 'ok'], 200);
        })->middleware('web');
        Route::post('webservices/updateshipment', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            $language   =   (($user->language) ? $user->language : \Spot\Shipment\Models\Settings::get('language', true));
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }


            $theme_code     = \Cms\Classes\Theme::getActiveThemeCode();
            $theme          = \Cms\Classes\Theme::load($theme_code);
            $translator     = \RainLab\Translate\Classes\Translator::instance();
            $currentLang    = $translator->getLocale();
            $theme_lang     = $theme->getConfigArray('translate')[$currentLang];

            $settings       =   \Spot\Shipment\Models\Settings::instance();

            $item           = \Spot\Shipment\Models\Order::find(Request::get('id'));


            $item->packaging_id     = htmlspecialchars(Request::get('packaging_id'));
            $item->office_id        = htmlspecialchars(Request::get('office_id'));
            $item->ship_date        = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat(('Y-m-d'), Request::get('ship_date')));
            $shipdate               = \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat(('Y-m-d'), Request::get('ship_date')));
            $deliverydate           = $shipdate->addHours($item->deliverytime->count);
            $item->delivery_date    = $deliverydate;
            if(Request::get('status_id') && Request::get('status_id') != ''){
                $item->status_id    = htmlspecialchars(Request::get('status_id'));
                $status             = \Spot\Shipment\Models\Status::find(Request::get('status_id'));
                if($status->equal){
                    $item->requested= $status->equal;
                }
            }
            $item->updated_at       = \Carbon\Carbon::now();
            $item->update();

            if($item->type == 1){
                if(Request::get('customer_lat')){
                    \Spot\Shipment\Models\Address::where('id', $item->sender_address_id)->update(['lat' =>  Request::get('customer_lat')]);
                }
                if(Request::get('customer_lng')){
                    \Spot\Shipment\Models\Address::where('id', $item->sender_address_id)->update(['lng' =>  Request::get('customer_lng')]);
                }
                if(Request::get('customer_url')){
                    \Spot\Shipment\Models\Address::where('id', $item->sender_address_id)->update(['url' =>  Request::get('customer_url')]);
                }
            }else{
                if(Request::get('customer_lat')){
                    \Spot\Shipment\Models\Address::where('id', $item->receiver_address_id)->update(['lat' =>  Request::get('customer_lat')]);
                }
                if(Request::get('customer_lng')){
                    \Spot\Shipment\Models\Address::where('id', $item->receiver_address_id)->update(['lng' =>  Request::get('customer_lng')]);
                }
                if(Request::get('customer_url')){
                    \Spot\Shipment\Models\Address::where('id', $item->receiver_address_id)->update(['url' =>  Request::get('customer_url')]);
                }
            }

            if(Request::get('items') && Request::get('items') != ''){
                foreach(Request::get('items') as $shipping_item){
                    if(isset($shipping_item['id'])){
                        $subitem                    = \Spot\Shipment\Models\Item::find($shipping_item['id']);
                        $subitem->category_id       = htmlspecialchars($shipping_item['category_id']);
                        $subitem->description       = htmlspecialchars($shipping_item['description']);
                        $subitem->quantity          = htmlspecialchars($shipping_item['quantity']);
                        $subitem->weight            = htmlspecialchars($shipping_item['weight']);
                        $subitem->length            = htmlspecialchars($shipping_item['length']);
                        $subitem->width             = htmlspecialchars($shipping_item['width']);
                        $subitem->height            = htmlspecialchars($shipping_item['height']);
                        $subitem->update();
                    }else{
                        $subitem                    = new \Spot\Shipment\Models\Item;
                        $subitem->order_id          = $item->id;
                        $subitem->category_id       = htmlspecialchars($shipping_item['category_id']);
                        $subitem->description       = htmlspecialchars($shipping_item['description']);
                        $subitem->quantity          = htmlspecialchars($shipping_item['quantity']);
                        $subitem->weight            = htmlspecialchars($shipping_item['weight']);
                        $subitem->length            = htmlspecialchars($shipping_item['length']);
                        $subitem->width             = htmlspecialchars($shipping_item['width']);
                        $subitem->height            = htmlspecialchars($shipping_item['height']);
                        $subitem->save();
                    }
                }
            }

            if(Request::get('note') && Request::get('note') != ''){
                $data = post();
                $note                               = new \Spot\Shipment\Models\Notes;
                $note->user_id                      = $user->id;
                $note->item_id                      = $item->id;
                $note->item_type                    = 1;
                $note->content                      = Request::get('note');
                $note->created_at                   = \Carbon\Carbon::now();
                $note->updated_at                   = \Carbon\Carbon::now();
                $note->save();
            }

            if($item->assigned_id){
                $responsiable   =   $item->assigned_id;
            }elseif($item->manifest_id){
                if($item->manifest->driver_id){
                    $responsiable   =   $item->manifest->driver_id;
                }elseif($item->manifest->employee_id){
                    $responsiable   =   $item->manifest->employee_id;
                }else{
                    $responsiable   =   $user->id;
                }
            }else{
                $responsiable   =   $user->id;
            }


            $event_data =   array(
                'sender'                =>  $user,
                'shipping_sender'       =>  $item->sender_id,
                'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
                'shipping_responsible'  =>  $responsiable,
                'item'                  =>  $item,
                'type'                  =>  $type,
                'thumb'                 =>  'icon',
                'icon'                  =>  'flaticon-gift',
                'subject'               =>  $theme_lang[$type],
                'message'               =>  $theme_lang[$type],
                'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
                'badge'                 =>  'success',
            );

            $pusher = '';
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
            }
            \Event::fire('spot.event', [$pusher,$settings,$event_data]);

            if($user->devicetoken){
                $content = array(
                    "en" => $theme_lang[$type]
                );
                $heading = array(
                    "en" => $theme_lang[$type]
                );

                /* ANDROID */

                /*
                $fields = array(
                    //TODO : change the app_id to be a settings
                   'app_id' => 'cbbde828-1e60-4530-83e2-b68b0079c4e0',
                   'include_player_ids' => [$user->devicetoken],
                   //'included_segments' => array('All'),
                   //'included_segments' => array('Doctors'),
                   'data' => array(
                       "number"  => 1,
                   ),
                   //'url' => 'http://www.yoursite.com',
                   'contents' => $content,
                   'headings' => $heading
                );
                */
                //for fcm
                $fields = array(
                        "registration_ids" => array($user->devicetoken),
                        //"token" => [$userModel->devicetoken],
                        "notification" => array(
                            "body"  => $content,
                            "title" => $heading
                        ),
                        "data" => array(
                            "number" =>(($event_data['item'] && isset($event_data['item']->number)) ? $event_data['item']->number : null)
                        )
                    );

                $fields = json_encode($fields);

                $ch = curl_init();
                /*
                curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic Y2M4MGI4YzAtOWEyYy00MTc2LTk4NDMtMjNlNDc3YThkZDFk'));
                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                */

                 $settings       =   \Spot\Shipment\Models\Settings::instance();

                //for fcm
                curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/fcm/send");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
                                                           'Authorization: key='.$settings->notifications['fcm']['employee_key']));
                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

                $response = curl_exec($ch);
                curl_close($ch);
            }

            $activity                   = new \Spot\Shipment\Models\Activity;
            $activity->user_id          = $user->id;
            $activity->order_id         = $item->id;
            $activity->description      = $type;
            if(Request::get('lat')){
                $activity->lat              = Request::get('lat');
                $activity->lng              = Request::get('lng');
            }
            if(Request::get('message')){
                $activity->other            = htmlspecialchars(Request::get('message'));
            }
            $activity->created_at       = \Carbon\Carbon::now();
            $activity->updated_at       = \Carbon\Carbon::now();
            $activity->save();

            return response()->json(['success' => 'ok'], 200);
        })->middleware('web');
        Route::post('webservices/supplied', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            $language   =   (($user->language) ? $user->language : \Spot\Shipment\Models\Settings::get('language', true));
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }


            $theme_code     = \Cms\Classes\Theme::getActiveThemeCode();
            $theme          = \Cms\Classes\Theme::load($theme_code);
            $translator     = \RainLab\Translate\Classes\Translator::instance();
            $currentLang    = $translator->getLocale();
            $theme_lang     = $theme->getConfigArray('translate')[$currentLang];

            $settings       =   \Spot\Shipment\Models\Settings::instance();

            $item                       = \Spot\Shipment\Models\Order::find(Request::get('id'));


            if($item->assigned_id != null){
                $employee_id    =   $item->assigned_id;
            }else{
                if($item->manifest_id != null){
                    if($item->manifest->driver_id){
                        $employee_id   =   $item->manifest->driver_id;
                    }elseif($item->manifest->employee_id){
                        $employee_id   =   $item->manifest->employee_id;
                    }
                }
            }

            $payments               = \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_with', $employee_id)->where('payment_type','package_fee')->get();

            $amount                         =   $item->package_fee;
            if($item->return_defray == 1 && $item->return_package_fee == 2){
                $amount                 =   $amount-$item->return_courier_fee;
            }

            $payment                    = new \Spot\Shipment\Models\Payment;
            $payment->type              = 1;
            $payment->payment_type      = 'package_fee';
            $payment->item_id           = $item->id;
            $payment->payment_with      = $employee_id;
            $payment->movement          = 7; //Deduction from the balance of packages
            $payment->amount            = '-'.str_replace('-','',$amount);
            $payment->date              = \Carbon\Carbon::now();
            $payment->created_at        = \Carbon\Carbon::now();
            $payment->updated_at        = \Carbon\Carbon::now();
            $payment->save();

            $payment                    = new \Spot\Shipment\Models\Payment;
            $payment->type              = 1;
            $payment->payment_type      = 'package_fee';
            $payment->for_id            = $item->sender_id;
            $payment->payment_with      = $item->sender_id;
            $payment->item_id           = $item->id;
            $payment->movement          = 3;
            $payment->amount            = '-'.str_replace('-','',$amount);
            $payment->date              = \Carbon\Carbon::now();
            $payment->created_at        = \Carbon\Carbon::now();
            $payment->updated_at        = \Carbon\Carbon::now();
            $payment->save();



            $status                     = \Spot\Shipment\Models\Status::where('equal', 12)->first();
            if($status){
                $item->status           = $status->id;
            }
            $item->assigned_id          = null;
            $item->manifest_id          = null;
            $item->requested            = 12;
            $item->updated_at           = \Carbon\Carbon::now();
            $item->update();


            if($item->assigned_id){
                $responsiable   =   $item->assigned_id;
            }elseif($item->manifest_id){
                if($item->manifest->driver_id){
                    $responsiable   =   $item->manifest->driver_id;
                }elseif($item->manifest->employee_id){
                    $responsiable   =   $item->manifest->employee_id;
                }else{
                    $responsiable   =   $user->id;
                }
            }else{
                $responsiable   =   $user->id;
            }



            $event_data =   array(
                'sender'                =>  $user,
                'shipping_sender'       =>  $item->sender_id,
                'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
                'shipping_responsible'  =>  $responsiable,
                'item'                  =>  $item,
                'type'                  =>  $type,
                'thumb'                 =>  'icon',
                'icon'                  =>  'flaticon-gift',
                'subject'               =>  $theme_lang[$type],
                'message'               =>  $theme_lang[$type],
                'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
                'badge'                 =>  'success',
            );

            $pusher = '';
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
            }
            \Event::fire('spot.event', [$pusher,$settings,$event_data]);

            if($user->devicetoken){
                $content = array(
                    "en" => $theme_lang[$type]
                );
                $heading = array(
                    "en" => $theme_lang[$type]
                );

                /* ANDROID */

                /*
                $fields = array(
                    //TODO : change the app_id to be a settings
                   'app_id' => 'cbbde828-1e60-4530-83e2-b68b0079c4e0',
                   'include_player_ids' => [$user->devicetoken],
                   //'included_segments' => array('All'),
                   //'included_segments' => array('Doctors'),
                   'data' => array(
                       "number"  => 1,
                   ),
                   //'url' => 'http://www.yoursite.com',
                   'contents' => $content,
                   'headings' => $heading
                );
                */

                //for fcm
                $fields = array(
                        "registration_ids" => array($user->devicetoken),
                        //"token" => [$userModel->devicetoken],
                        "notification" => array(
                            "body"  => $content,
                            "title" => $heading
                        ),
                        "data" => array(
                            "number" => (($event_data['item'] && isset($event_data['item']->number)) ? $event_data['item']->number : null)
                        )
                    );


                $fields = json_encode($fields);

                $ch = curl_init();
                /*
                curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic Y2M4MGI4YzAtOWEyYy00MTc2LTk4NDMtMjNlNDc3YThkZDFk'));
                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                */
                $settings       =   \Spot\Shipment\Models\Settings::instance();

                //for fcm
                curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/fcm/send");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
                                                           'Authorization: key='.$settings->notifications['fcm']['employee_key']));
                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

                $response = curl_exec($ch);
                curl_close($ch);
            }

            $activity                   = new \Spot\Shipment\Models\Activity;
            $activity->user_id          = $user->id;
            $activity->order_id         = $item->id;
            $activity->description      = $type;
            if(Request::get('lat')){
                $activity->lat              = Request::get('lat');
                $activity->lng              = Request::get('lng');
            }
            if(Request::get('message')){
                $activity->other            = htmlspecialchars(Request::get('message'));
            }
            $activity->created_at       = \Carbon\Carbon::now();
            $activity->updated_at       = \Carbon\Carbon::now();
            $activity->save();

            return response()->json(['success' => 'ok'], 200);
        })->middleware('web');
        Route::post('webservices/discards', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            $language   =   (($user->language) ? $user->language : \Spot\Shipment\Models\Settings::get('language', true));
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }


            $theme_code     = \Cms\Classes\Theme::getActiveThemeCode();
            $theme          = \Cms\Classes\Theme::load($theme_code);
            $translator     = \RainLab\Translate\Classes\Translator::instance();
            $currentLang    = $translator->getLocale();
            $theme_lang     = $theme->getConfigArray('translate')[$currentLang];

            $settings       =   \Spot\Shipment\Models\Settings::instance();

            $item                       = \Spot\Shipment\Models\Order::find(Request::get('id'));


                if($item->requested ==  4){

                        if($item->assigned_id != null){
                            $employee_id    =   $item->assigned_id;
                        }else{
                            if($item->manifest_id != null){
                                if($item->manifest->driver_id){
                                    $employee_id   =   $item->manifest->driver_id;
                                }elseif($item->manifest->employee_id){
                                    $employee_id   =   $item->manifest->employee_id;
                                }
                            }
                        }
                        $payments   =   \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_with',  $employee_id)->where('status', 1)->get();

                        if(!$payments || empty($payments->toArray())){
                            if($item->payment_type  ==  2){
                                if($item->return_defray == 1 && $item->return_package_fee == 1  ){
                                    $payments   =   \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_with', '!=', null)->whereIn('payment_type',['customs','tax','insurance','courier_fee','package_fee','return_package_fee'])->where('treasury_id', null)->get();
                                }else{
                                    if($item->return_defray == 1){
                                        $payments   =   \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_with', '!=', null)->whereIn('payment_type',['customs','tax','insurance','courier_fee','package_fee'])->where('treasury_id', null)->get();
                                    }else{
                                        $payments   =   \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_with', '!=', null)->whereIn('payment_type',['customs','tax','insurance','courier_fee'])->where('treasury_id', null)->get();
                                    }
                                }
                            }else{
                                if($item->return_defray == 1 && $item->return_package_fee == 1){
                                    $payments   =   \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_with', '!=', null)->whereIn('payment_type',['package_fee','return_package_fee'])->where('treasury_id', null)->get();
                                }else{
                                    $payments   =   \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_with', '!=', null)->whereIn('payment_type',['package_fee'])->where('treasury_id', null)->get();
                                }
                            }
                        }

                        if(isset($payments) && $payments){
                            foreach($payments as $old){
                                $old->status            = 5;
                                $old->updated_at        = \Carbon\Carbon::now();
                                $old->update();

                                $payment                    = new \Spot\Shipment\Models\Payment;
                                $payment->type              = 1;
                                $payment->payment_type      = $old->payment_type;
                                $payment->item_id           = $old->item_id;
                                $payment->payment_with      = $old->payment_with;
                                $payment->movement          = 7; //Deduction from the balance of packages
                                $payment->amount            = '-'.$old->amount;
                                $payment->status            = 5;
                                $payment->date              = \Carbon\Carbon::now();
                                $payment->created_at        = \Carbon\Carbon::now();
                                $payment->updated_at        = \Carbon\Carbon::now();
                                $payment->save();


                                $treasury            = \Spot\Shipment\Models\Treasury::where('office_id', $item->office_id)->first();
                                if(!$treasury){
                                    $treasury            = \Spot\Shipment\Models\Treasury::where('default', 1)->first();
                                }


                                $payment                    = new \Spot\Shipment\Models\Payment;
                                $payment->type              = 3;
                                $payment->payment_type      = $old->payment_type;
                                $payment->item_id           = $old->item_id;
                                $payment->movement          = 2; //Deduction from the balance of packages


                                $amount                     = $old->amount;
                                if($item->return_defray == 1 && $item->return_package_fee == 2 && $old->payment_type == 'package_fee'){
                                    $amount                 = ($old->amount-$item->return_courier_fee);
                                }
                                $payment->amount            = $amount;
                                $payment->status            = 5;
                                $payment->treasury_id       = $treasury->id;
                                $payment->date              = \Carbon\Carbon::now();
                                $payment->created_at        = \Carbon\Carbon::now();
                                $payment->updated_at        = \Carbon\Carbon::now();
                                $payment->save();

                                $treasury->balance          = $treasury->balance+$old->amount;
                                $treasury->updated_at       = \Carbon\Carbon::now();
                                $treasury->save();
                            }


                            $amount                     = $item->package_fee;
                            if($item->return_defray == 1 && $item->return_package_fee == 2 && $old->payment_type == 'package_fee'){
                                $amount                 = ($item->package_fee-$item->return_courier_fee);

                                $oldpayment = \Spot\Shipment\Models\Payment::where('item_id',$item->id)->where('for_id',$item->sender_id)->where('movement',4)->where('type', 1)->where('amount', $item->package_fee)->first();
                            }
                            if(isset($oldpayment) && $oldpayment){
                                $oldpayment->amount         = $amount;
                                $oldpayment->updated_at     = \Carbon\Carbon::now();
                                $oldpayment->save();
                            }

                            if($item->return_defray == 1 && $item->return_package_fee == 2){
                                $payment                    = new \Spot\Shipment\Models\Payment;
                                $payment->type              = 3;
                                $payment->item_id           = $item->id;
                                $payment->payment_type      = 'return_package_fee';
                                $payment->treasury_id       = $treasury->id;
                                $payment->status            = 3;
                                $payment->movement          = 8; //Add  to the balance of packages
                                $payment->amount            = $item->return_courier_fee;
                                $payment->date              = \Carbon\Carbon::now();
                                $payment->created_at        = \Carbon\Carbon::now();
                                $payment->updated_at        = \Carbon\Carbon::now();
                                $payment->save();
                            }
                        }

                        $status                     = \Spot\Shipment\Models\Status::where('equal', 10)->first();
                        if($status){
                            $item->status           = $status->id;
                        }
                        $item->assigned_id          = null;
                        $item->manifest_id          = null;
                        $item->requested            = 10;
                        $item->updated_at           = \Carbon\Carbon::now();
                        $item->update();


                }elseif($item->requested ==  11){

                    if($item->assigned_id != null){
                        $employee_id    =   $item->assigned_id;
                    }else{
                        if($item->manifest_id != null){
                            if($item->manifest->driver_id){
                                $employee_id   =   $item->manifest->driver_id;
                            }elseif($item->manifest->employee_id){
                                $employee_id   =   $item->manifest->employee_id;
                            }
                        }
                    }

                    $payments               = \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_with', $employee_id)->where('payment_type','package_fee')->get();

                    $amount                         =   $item->package_fee;
                    if($item->return_defray == 1 && $item->return_package_fee == 2){
                        $amount                 =   $amount-$item->return_courier_fee;
                    }

                    $payment                    = new \Spot\Shipment\Models\Payment;
                    $payment->type              = 1;
                    $payment->payment_type      = 'package_fee';
                    $payment->item_id           = $item->id;
                    $payment->payment_with      = $employee_id;
                    $payment->movement          = 7; //Deduction from the balance of packages
                    $payment->amount            = '-'.str_replace('-','',$amount);
                    $payment->date              = \Carbon\Carbon::now();
                    $payment->created_at        = \Carbon\Carbon::now();
                    $payment->updated_at        = \Carbon\Carbon::now();
                    $payment->save();

                    $payment                    = new \Spot\Shipment\Models\Payment;
                    $payment->type              = 1;
                    $payment->payment_type      = 'package_fee';
                    $payment->for_id            = $item->sender_id;
                    $payment->payment_with      = $item->sender_id;
                    $payment->item_id           = $item->id;
                    $payment->movement          = 3;
                    $payment->amount            = '-'.str_replace('-','',$amount);
                    $payment->date              = \Carbon\Carbon::now();
                    $payment->created_at        = \Carbon\Carbon::now();
                    $payment->updated_at        = \Carbon\Carbon::now();
                    $payment->save();



                    $status                     = \Spot\Shipment\Models\Status::where('equal', 12)->first();
                    if($status){
                        $item->status           = $status->id;
                    }
                    $item->assigned_id          = null;
                    $item->manifest_id          = null;
                    $item->requested            = 12;
                    $item->updated_at           = \Carbon\Carbon::now();
                    $item->update();

                }else{

                    $status                     = \Spot\Shipment\Models\Status::where('equal', 5)->first();

                    $payments                   = \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where(function($q){
                                                            $q->where('status', 1)->orWhere('status', 4);
                                                    })->get();
                    foreach($payments as $payment){
                        if($payment->payment_type   ==  'package_fee'){
                            $payment->status    = 2;
                        }else{
                            $payment->for_id    = $item->sender_id;
                            $payment->payment_with      = $item->sender_id;
                        }
                        $payment->updated_at    = \Carbon\Carbon::now();
                        $payment->update();
                    }

                    if($item->return_package_fee  ==  1){
                        $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_receiver'];
                    }else{
                        $return_courier_fee  =   $this['settings']['fees']['delivery_cost_back_sender'];
                    }

                    if(isset($item->receiver_address_id) && $item->receiver_address_id   !=   '') {
                        $sender_address_id      =   \Spot\Shipment\Models\Address::find($item->sender_address_id);
                        $receiver_address_id    =   \Spot\Shipment\Models\Address::find($item->receiver_address_id);

                        $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->county)->where('to',$receiver_address_id->county)->where('type',4)->first();
                        if(!$fees){
                            $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->city)->where('to',$receiver_address_id->city)->where('type',3)->first();
                            if(!$fees){
                                $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->state)->where('to',$receiver_address_id->state)->where('type',2)->first();
                                if(!$fees){
                                    $fees   =   \Spot\Shipment\Models\Fees::where('from',$sender_address_id->country)->where('to',$receiver_address_id->country)->where('type',1)->first();
                                }
                            }
                        }

                        if($fees){

                            if(Request::get('return_package_fee')  ==  1){
                                $return_courier_fee  =   $fees->delivery_cost_back_receiver;
                            }else{
                                $return_courier_fee  =   $fees->delivery_cost_back_sender;
                            }
                        }

                    }

                    if($status){
                        $item->status           = $status->id;
                    }
                    $item->requested            = 5;
                    $item->return_package_fee   = ((Request::get('message') != 2) ? Request::get('return_package_fee') : 2);
                    $item->return_courier_fee   = $return_courier_fee;
                    $item->updated_at           = \Carbon\Carbon::now();
                    $item->update();

                    $return_payment             = \Spot\Shipment\Models\Payment::where('item_id', $item->id)->where('payment_type','return_package_fee')->first();
                    if(!$return_payment){

                        $payment                    = new \Spot\Shipment\Models\Payment;
                        $payment->type              = 1;
                        $payment->payment_type      = 'return_package_fee';
                        $payment->item_id           = $item->id;
                        if(Request::get('message') == 2){
                            $payment->for_id            = $item->sender_id;
                        }else{
                            if($item->receiver_id){
                                if(Request::get('return_package_fee')  ==  1){
                                    $payment->for_id            = $item->receiver_id;
                                    $payment->status            = 3;
                                    if($item->assigned_id){
                                        $payment->payment_with      = $item->assigned_id;
                                    }elseif($item->manifest_id){
                                        if($item->manifest->driver_id){
                                            $payment->payment_with   =   $item->manifest->driver_id;
                                        }elseif($item->manifest->employee_id){
                                            $payment->payment_with   =   $item->manifest->employee_id;
                                        }
                                    }
                                }else{
                                    $payment->for_id            = $item->sender_id;
                                    $payment->payment_with      = $item->sender_id;
                                }
                            }else{
                                $payment->for_id            = $item->sender_id;
                                $payment->payment_with      = $item->sender_id;
                            }
                        }
                        $payment->movement          = 3; //Deduction from the wallet
                        $payment->amount            = '-'.$item->return_courier_fee;
                        $payment->date              = \Carbon\Carbon::parse($item->ship_date);
                        $payment->created_at        = \Carbon\Carbon::now();
                        $payment->updated_at        = \Carbon\Carbon::now();
                        $payment->save();
                    }

                    $event_data =   array(
                        'sender'                =>  Auth::getUser(),
                        'shipping_sender'       =>  $item->sender_id,
                        'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
                        'shipping_responsible'  =>  $item->assigned_id,
                        'item'                  =>  $item,
                        'type'                  =>  'discards_request',
                        'thumb'                 =>  'icon',
                        'icon'                  =>  'flaticon-gift',
                        'subject'               =>  $this['theme_lang']['discards_request'],
                        'message'               =>  $this['theme_lang']['discards_request'],
                        'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
                        'badge'                 =>  'success',
                    );
                    \Event::fire('spot.event', [$this['pusher'],$this['settings'],$event_data]);

                    $activity                   = new \Spot\Shipment\Models\Activity;
                    $activity->user_id          = Auth::getUser()->id;
                    $activity->order_id         = $item->id;
                    $activity->description      = 'discards_request';
                    if(Request::get('message') && Request::get('message') != ''){
                        switch(Request::get('message')){
                            case 1:
                                $activity->other            = $this['theme_lang']['receiver_request'];
                            break;
                            case 2:
                                $activity->other            = $this['theme_lang']['receiver_evade'];
                            break;
                            case 3:
                                $activity->other            = $this['theme_lang']['sender_request'];
                            break;
                            default:
                                $activity->other            = htmlspecialchars(Request::get('message'));
                        }
                    }
                    $activity->created_at       = \Carbon\Carbon::now();
                    $activity->updated_at       = \Carbon\Carbon::now();
                    $activity->save();

                }
                /*

                            if($item->assigned_id){
                                $responsiable   =   $item->assigned_id;
                            }elseif($item->manifest_id){
                                if($item->manifest->driver_id){
                                    $responsiable   =   $item->manifest->driver_id;
                                }elseif($item->manifest->employee_id){
                                    $responsiable   =   $item->manifest->employee_id;
                                }else{
                                    $responsiable   =   $user->id;
                                }
                            }else{
                                $responsiable   =   $user->id;
                            }



                            $event_data =   array(
                                'sender'                =>  $user,
                                'shipping_sender'       =>  $item->sender_id,
                                'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
                                'shipping_responsible'  =>  $responsiable,
                                'item'                  =>  $item,
                                'type'                  =>  $type,
                                'thumb'                 =>  'icon',
                                'icon'                  =>  'flaticon-gift',
                                'subject'               =>  $theme_lang[$type],
                                'message'               =>  $theme_lang[$type],
                                'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
                                'badge'                 =>  'success',
                            );

                            $pusher = '';
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
                            }
                            \Event::fire('spot.event', [$pusher,$settings,$event_data]);

                            if($user->devicetoken){
                                $content = array(
                                    "en" => $theme_lang[$type]
                                );
                                $heading = array(
                                    "en" => $theme_lang[$type]
                                );

                                /* ANDROID
                                $fields = array(
                                    //TODO : change the app_id to be a settings
                                   'app_id' => 'cbbde828-1e60-4530-83e2-b68b0079c4e0',
                                   'include_player_ids' => [$user->devicetoken],
                                   //'included_segments' => array('All'),
                                   //'included_segments' => array('Doctors'),
                                   'data' => array(
                                       "number"  => 1,
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
                            }

                            $activity                   = new \Spot\Shipment\Models\Activity;
                            $activity->user_id          = $user->id;
                            $activity->order_id         = $item->id;
                            $activity->description      = $type;
                            if(Request::get('lat')){
                                $activity->lat              = Request::get('lat');
                                $activity->lng              = Request::get('lng');
                            }
                            if(Request::get('message')){
                                $activity->other            = htmlspecialchars(Request::get('message'));
                            }
                            $activity->created_at       = \Carbon\Carbon::now();
                            $activity->updated_at       = \Carbon\Carbon::now();
                            $activity->save();
                */
            return response()->json(['success' => 'ok'], 200);
        })->middleware('web');
        Route::post('webservices/addnote', function (\Request $request) {
            $token      =   Request::get('token');
            $user       =   JWTAuth::authenticate($token);
            $language   =   (($user->language) ? $user->language : \Spot\Shipment\Models\Settings::get('language', true));
            if(!$user){
                return response()->json(['error' => 'not_authorised'], 405);
            }


            $theme_code     = \Cms\Classes\Theme::getActiveThemeCode();
            $theme          = \Cms\Classes\Theme::load($theme_code);
            $translator     = \RainLab\Translate\Classes\Translator::instance();
            $currentLang    = $translator->getLocale();
            $theme_lang     = $theme->getConfigArray('translate')[$currentLang];

            $settings       =   \Spot\Shipment\Models\Settings::instance();

            $note                               = new \Spot\Shipment\Models\Notes;
            $note->user_id                      = $user->id;
            $note->item_id                      = Request::get('id');
            $note->item_type                    = 1;
            $note->content                      = Request::get('note');
            $note->created_at                   = \Carbon\Carbon::now();
            $note->updated_at                   = \Carbon\Carbon::now();
            $note->save();


            $item                       = \Spot\Shipment\Models\Order::find(Request::get('id'));

            if($item->assigned_id){
                $responsiable   =   $item->assigned_id;
            }elseif($item->manifest_id){
                if($item->manifest->driver_id){
                    $responsiable   =   $item->manifest->driver_id;
                }elseif($item->manifest->employee_id){
                    $responsiable   =   $item->manifest->employee_id;
                }else{
                    $responsiable   =   $user->id;
                }
            }else{
                $responsiable   =   $user->id;
            }



            $type = 'new_note';

            $event_data =   array(
                'sender'                =>  $user,
                'shipping_sender'       =>  $item->sender_id,
                'shipping_receiver'     =>  (($item->receiver_id) ? $item->receiver_id : null),
                'shipping_responsible'  =>  $responsiable,
                'item'                  =>  $item,
                'type'                  =>  $type,
                'thumb'                 =>  'icon',
                'icon'                  =>  'flaticon-gift',
                'subject'               =>  $theme_lang[$type],
                'message'               =>  $theme_lang[$type],
                'url'                   =>  url('dashboard/shipments/'.$item->id.'/view'),
                'badge'                 =>  'success',
            );

            $pusher = '';
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
            }
            \Event::fire('spot.event', [$pusher,$settings,$event_data]);

            if($user->devicetoken){
                $content = array(
                    "en" => $theme_lang[$type]
                );
                $heading = array(
                    "en" => $theme_lang[$type]
                );

                /* ANDROID */
                /*
                $fields = array(
                    //TODO : change the app_id to be a settings
                   'app_id' => 'cbbde828-1e60-4530-83e2-b68b0079c4e0',
                   'include_player_ids' => [$user->devicetoken],
                   //'included_segments' => array('All'),
                   //'included_segments' => array('Doctors'),
                   'data' => array(
                       "number"  => 1,
                   ),
                   //'url' => 'http://www.yoursite.com',
                   'contents' => $content,
                   'headings' => $heading
                );
                */
                //for fcm
                $fields = array(
                        "registration_ids" => array($user->devicetoken),
                        //"token" => [$userModel->devicetoken],
                        "notification" => array(
                            "body"  => $content,
                            "title" => $heading
                        ),
                        "data" => array(
                            "number" =>(($event_data['item'] && isset($event_data['item']->number)) ? $event_data['item']->number : null)
                        )
                    );

                $fields = json_encode($fields);

                $ch = curl_init();
                /*
                curl_setopt($ch, CURLOPT_URL, "https://onesignal.com/api/v1/notifications");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic Y2M4MGI4YzAtOWEyYy00MTc2LTk4NDMtMjNlNDc3YThkZDFk'));
                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                */
                $settings       =   \Spot\Shipment\Models\Settings::instance();

                //for fcm
                curl_setopt($ch, CURLOPT_URL, "https://fcm.googleapis.com/fcm/send");
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json',
                                                           'Authorization: key='.$settings->notifications['fcm']['employee_key']));
                //curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=utf-8', 'Authorization: Basic YTAzNDI4NjktMTEyYi00MjBhLWFmYTAtMGJlMTQxMTQ0OTU1'));
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                curl_setopt($ch, CURLOPT_HEADER, FALSE);
                curl_setopt($ch, CURLOPT_POST, TRUE);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);

                $response = curl_exec($ch);
                curl_close($ch);
            }

            $activity                   = new \Spot\Shipment\Models\Activity;
            $activity->user_id          = $user->id;
            $activity->order_id         = $item->id;
            $activity->description      = $type;
            if(Request::get('lat')){
                $activity->lat              = Request::get('lat');
                $activity->lng              = Request::get('lng');
            }
            if(Request::get('message')){
                $activity->other            = htmlspecialchars(Request::get('message'));
            }
            $activity->created_at       = \Carbon\Carbon::now();
            $activity->updated_at       = \Carbon\Carbon::now();
            $activity->save();

            return response()->json(['success' => 'ok'], 200);
        })->middleware('web');
    /********************************************/
    /*              WEBSERVICES                 */
    /********************************************/

    Route::any('uploadcopy/{id}', function(Request $req,$id) {
        $file = new \System\Models\File;
        $file->data = \Input::file('copy');
        $file->save();
        $order  =   \Spot\Shipment\Models\Order::find($id);
        $order->id_copy()->add($file);
    });
    Route::any('translatemessages', function(Request $req) {
        $request = post();

        // TODO: Add a way to translate lang.yaml from the theme file
        $records    =   new \RainLab\Translate\Models\Message;

        if(isset($req->search) && $req['search']['value'] != ''){
            $search     =   $req['search']['value'];
            $records    =   $records->where('code', 'like', "%$search%");
        }
        $count      =   $records->count();
        $records    =   $records->orderBy('id', 'desc')->get();

        $languages      =   \RainLab\Translate\Models\Locale::all();

        $recordsArray   =   array();
        $n  =   0;
        foreach($records as $record){
            if($record->message_data['x'] == ''){
                continue;
            }
            $n++;
            $recordArray   =   array();
            foreach($languages as $lang){
                if(isset($record->message_data[$lang->code])){
                    $recordArray[$lang->name] =   '<label rel="'.$record->id.'" data-language="'.$lang->code.'" class="translate">'.$record->message_data[$lang->code].'</label>';
                }elseif($lang->code == 'en'){
                    $recordArray[$lang->name] =   '<label rel="'.$record->id.'" data-language="'.$lang->code.'" class="translate">'.$record->message_data['x'].'</label>';
                }else{
                    $recordArray[$lang->name] =   '<label rel="'.$record->id.'" data-language="'.$lang->code.'" class="translate"></label>';
                }
            }
            array_push($recordsArray,$recordArray);
        }

        $columnsDefault = [
            'id'               => true,
            'name'             => true,
            'province'         => true,
            'cities'           => true,
            'actions'          => true,
        ];

        if ( isset( $_REQUEST['columnsDef'] ) && is_array( $_REQUEST['columnsDef'] ) ) {
            $columnsDefault = [];
            foreach ( $_REQUEST['columnsDef'] as $field ) {
                $columnsDefault[ $field ] = true;
            }
        }

        // get all raw data
        $alldata = $recordsArray;

        $data = [];
        // internal use; filter selected columns only from raw data
        foreach ( $alldata as $d ) {
            $data[] = $d;
        }

        // count data
            $totalDisplay = count( $data );
            $totalRecords = $count;


        // sort
        if ( isset( $_REQUEST['order'][0]['column'] ) && $_REQUEST['order'][0]['dir'] ) {
            $column = $_REQUEST['order'][0]['column'];
            $dir    = $_REQUEST['order'][0]['dir'];
            usort( $data, function ( $a, $b ) use ( $column, $dir ) {
                $a = array_slice( $a, $column, 1 );
                $b = array_slice( $b, $column, 1 );
                $a = array_pop( $a );
                $b = array_pop( $b );

                if ( $dir === 'asc' ) {
                    return $a > $b ? true : false;
                }

                return $a < $b ? true : false;
            } );
        }

        // pagination length
        if ( isset( $_REQUEST['length'] ) ) {
            $data = array_splice( $data, $_REQUEST['start'], $_REQUEST['length'] );
        }

        // return array values only without the keys
        if ( isset( $_REQUEST['array_values'] ) && $_REQUEST['array_values'] ) {
            $tmp  = $data;
            $data = [];
            foreach ( $tmp as $d ) {
                $data[] = array_values( $d );
            }
        }

        $secho = 0;
        if ( isset( $_REQUEST['sEcho'] ) ) {
            $secho = intval( $_REQUEST['sEcho'] );
        }

        $result = [
            'iTotalRecords'        => $totalRecords,
            'iTotalDisplayRecords' => $totalDisplay,
            'sEcho'                => $secho,
            'sColumns'             => '',
            'aaData'               => $data,
        ];

        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

        die(json_encode( $result, JSON_PRETTY_PRINT ));
    });
    Route::any('backups', function(Request $req) {
        $request = post();

        $backups = [];
        $localBackupFiles = array_values(array_diff(scandir(\Panakour\Backup\Models\Settings::getBackupsPath()), ['.', '..']));

        if(isset($req->search) && $req['search']['value'] != ''){
            $search     =   $req['search']['value'];
            $records    =   $records->where('code', 'like', "%$search%");
        }
        $count      =   count($localBackupFiles);
        $recordsArray   =   array();
        $n  =   0;
        foreach ($localBackupFiles as $index => $file) {
            $backups['storage'] = 'Local';
            $backups['fileInfo'] = pathinfo(\Panakour\Backup\Models\Settings::getBackupsPath().'/'.$file);
            $backups['size'] = ceil(filesize(\Panakour\Backup\Models\Settings::getBackupsPath().'/'.$file) / 1024);
            $backups['lastModified'] = date('d/m/Y', filemtime(\Panakour\Backup\Models\Settings::getBackupsPath().'/'.$file));
            array_push($recordsArray,$backups);
        }

        $columnsDefault = [
            'id'               => true,
            'name'             => true,
            'province'         => true,
            'cities'           => true,
            'actions'          => true,
        ];

        if ( isset( $_REQUEST['columnsDef'] ) && is_array( $_REQUEST['columnsDef'] ) ) {
            $columnsDefault = [];
            foreach ( $_REQUEST['columnsDef'] as $field ) {
                $columnsDefault[ $field ] = true;
            }
        }

        // get all raw data
        $alldata = $recordsArray;

        $data = [];
        // internal use; filter selected columns only from raw data
        foreach ( $alldata as $d ) {
            $data[] = $d;
        }

        // count data
            $totalDisplay = count( $data );
            $totalRecords = $count;


        // sort
        if ( isset( $_REQUEST['order'][0]['column'] ) && $_REQUEST['order'][0]['dir'] ) {
            $column = $_REQUEST['order'][0]['column'];
            $dir    = $_REQUEST['order'][0]['dir'];
            usort( $data, function ( $a, $b ) use ( $column, $dir ) {
                $a = array_slice( $a, $column, 1 );
                $b = array_slice( $b, $column, 1 );
                $a = array_pop( $a );
                $b = array_pop( $b );

                if ( $dir === 'asc' ) {
                    return $a > $b ? true : false;
                }

                return $a < $b ? true : false;
            } );
        }

        // pagination length
        if ( isset( $_REQUEST['length'] ) ) {
            $data = array_splice( $data, $_REQUEST['start'], $_REQUEST['length'] );
        }

        // return array values only without the keys
        if ( isset( $_REQUEST['array_values'] ) && $_REQUEST['array_values'] ) {
            $tmp  = $data;
            $data = [];
            foreach ( $tmp as $d ) {
                $data[] = array_values( $d );
            }
        }

        $secho = 0;
        if ( isset( $_REQUEST['sEcho'] ) ) {
            $secho = intval( $_REQUEST['sEcho'] );
        }

        $result = [
            'iTotalRecords'        => $totalRecords,
            'iTotalDisplayRecords' => $totalDisplay,
            'sEcho'                => $secho,
            'sColumns'             => '',
            'aaData'               => $data,
        ];

        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
        header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');

        die(json_encode( $result, JSON_PRETTY_PRINT ));
    });
    Route::any('currencies', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Responsiv\Currency\Models\Currency::orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%")
                    ->orWhere('currency_code', $search);
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $recordArray = array(
                //"nick"=> ucfirst(substr($record->name,0,2)),
                //"photo"=> (($record->avatar) ? $record->avatar->getThumb(50, 50, 'crop') : ''),
                //"created_at"=> Carbon\Carbon::parse($record->created_at)->format('d/m/Y h:i:s a'),
                'id'                =>  $record->id,
                'name'              =>  $record->name,
                'code'              =>  $record->currency_code,
                'is_default'        =>  $record->is_primary,
                'is_enabled'        =>  $record->is_enabled,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('languages', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \RainLab\Translate\Models\Locale::orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%")
                    ->orWhere('code', $search);
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $recordArray = array(
                //"nick"=> ucfirst(substr($record->name,0,2)),
                //"photo"=> (($record->avatar) ? $record->avatar->getThumb(50, 50, 'crop') : ''),
                //"created_at"=> Carbon\Carbon::parse($record->created_at)->format('d/m/Y h:i:s a'),
                'id'                =>  $record->id,
                'name'              =>  $record->name,
                'code'              =>  $record->code,
                'is_default'        =>  $record->is_default,
                'is_enabled'        =>  $record->is_enabled,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('notifications', function(Request $req) {
        $request    =   post();
        $page       =   $request['pagination']['page'];
        $perpage    =   $request['pagination']['perpage'];
        $sort       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip       =   intval(($page-1)*$perpage);

        $user       =   \RainLab\User\Models\User::find($request['id']);
        $records    =   $user->notifications();
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy('created_at', 'DESC')->get();


        $theme_code     = \Cms\Classes\Theme::getActiveThemeCode();
        $theme          = \Cms\Classes\Theme::load($theme_code);
        $translator     = \RainLab\Translate\Classes\Translator::instance();
        $currentLang    = $translator->getLocale();
        $theme_lang     = $theme->getConfigArray('translate')[$currentLang];

        $recordsArray   =   array();
        foreach($records as $record){
            $recordArray = array(
                "id"            =>  $record->id,
                "sender"        =>  $record->data['sender']['name'],
                "notification"  =>  $record->body,
                "type"          =>  $record->type,
                "status"        =>  (($record->read_at == null) ? 'new' : 'readed' ),
                "currentLang"        => $currentLang,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));
    });
    Route::any('backups', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $backups = [];
        $localBackupFiles = array_values(array_diff(scandir(\Panakour\Backup\Models\Settings::getBackupsPath()), ['.', '..']));

        $count      =   count($localBackupFiles);

        $recordsArray   =   array();
        foreach ($localBackupFiles as $index => $file) {
            $backups['storage'] = 'Local';
            $backups['fileInfo'] = pathinfo(\Panakour\Backup\Models\Settings::getBackupsPath().'/'.$file);
            $backups['size'] = ceil(filesize(\Panakour\Backup\Models\Settings::getBackupsPath().'/'.$file) / 1024);
            $backups['lastModified'] = date('d/m/Y', filemtime(\Panakour\Backup\Models\Settings::getBackupsPath().'/'.$file));
            array_push($recordsArray,$backups);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('departments', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \RainLab\User\Models\UserGroup::orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%")
                    ->orWhere('code', $search);
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $recordArray = array(
                'id'                =>  $record->id,
                'name'              =>  $record->name,
                'code'              =>  $record->code
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('branches', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\Office::orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%");
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $recordArray = array(
                'id'                =>  $record->id,
                'name'              =>  $record->name,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('cars', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\Car::orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%");
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $recordArray = array(
                'id'                =>  $record->id,
                'name'              =>  $record->name,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('statuses', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\Status::orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%");
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $recordArray = array(
                'id'                =>  $record->id,
                'name'              =>  $record->name,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('categories', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\Category::orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%");
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $recordArray = array(
                'id'                =>  $record->id,
                'name'              =>  $record->name,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('couriers', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\Courier::orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%");
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $recordArray = array(
                'id'                =>  $record->id,
                'name'              =>  $record->name,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('deliverytimes', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\DeliveryTime::orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%");
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $recordArray = array(
                'id'                =>  $record->id,
                'name'              =>  $record->name,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('shipping', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\Mode::orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%");
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $recordArray = array(
                'id'                =>  $record->id,
                'name'              =>  $record->name,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('treasury', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\Treasury::orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%");
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $recordArray = array(
                'id'                =>  $record->id,
                'name'              =>  $record->name,
                'balance'           =>  Currency::format($record->balance),
                'office'            =>  (($record->office) ? $record->office->name : '-'),
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('packaging', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\Packaging::orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%");
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $recordArray = array(
                'id'                =>  $record->id,
                'name'              =>  $record->name,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('countries', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \RainLab\Location\Models\Country::orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%");
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $recordArray = array(
                'id'                =>  $record->id,
                'name'              =>  $record->name,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('states', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \RainLab\Location\Models\State::whereHas('country', function($q){
                $q->where('is_enabled', 1);
        })->orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%");
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $recordArray = array(
                'id'                =>  $record->id,
                'name'              =>  $record->name,
                'place'             =>  (($record->country) ? $record->country->name: '-'),
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('cities', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\City::orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%");
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $recordArray = array(
                'id'                =>  $record->id,
                'name'              =>  $record->name,
                'place'             =>  (($record->state) ? $record->state->name.(($record->state->country) ? ', '.$record->state->country->name : ''): '-' ),
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('areas', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\Area::orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%");
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $recordArray = array(
                'id'                =>  $record->id,
                'name'              =>  $record->name,
                'place'              =>  (( $record->city) ?  $record->city->name.(($record->city->state) ? ', '.$record->city->state->name.(($record->city->state->country) ? ', '.$record->city->state->country->name : ''): '' ) : '-'),
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('fees', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\Fees::orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%");
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            switch ($record->type) {
                case 1:
                    $from_place  =   $record->country_from->name;
                    $to_place  =   $record->country_to->name;
                    break;
                case 2:
                    $from_place  =   $record->state_from->name;
                    $to_place  =   $record->state_to->name;
                    break;
                case 3:
                    $from_place  =   $record->city_from->name;
                    $to_place  =   $record->city_to->name;
                    break;
                case 4:
                    $from_place  =   $record->area_from->name;
                    $to_place  =   $record->area_to->name;
                    break;
            }
            $recordArray = array(
                'id'                =>  $record->id,
                'from'              =>  $from_place,
                'to'                =>  $to_place,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('employees', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \RainLab\User\Models\User::where('role_id', '!=', 5)->orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%")
                    ->orWhere('username', $search)
                    ->orWhere('mobile', $search)
                    ->orWhere('email', $search);
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $groups = array();
            if($record->groups){
                foreach ($record->groups as $group) {
                    $groups[] = $group->name;
                }
            }
            $recordArray = array(
                'id'                =>  $record->id,
                'name'              =>  $record->name,
                'email'             =>  $record->email,
                'mobile'            =>  $record->mobile,
                'role'              =>  (($record->role) ? $record->role->name : '-'),
                'groups'            =>  $groups
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('clients', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \RainLab\User\Models\User::where('role_id', 5)->orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%")
                    ->orWhere('username', $search)
                    ->orWhere('mobile', $search)
                    ->orWhere('email', $search);
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $groups = array();
            if($record->groups){
                foreach ($record->groups as $group) {
                    $groups[] = $group->name;
                }
            }
            $recordArray = array(
                'id'                =>  $record->id,
                'name'              =>  $record->name,
                'created_at'        =>  $record->created_at,
                'orders'            =>  $record->orders->count(),
                'wallet'            =>  Currency::format($record->payments->sum('amount')),
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('clienttransactions', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\Payment::where('for_id', $request['id'])->where('type', 1)->orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%")
                    ->orWhere('username', $search)
                    ->orWhere('mobile', $search)
                    ->orWhere('email', $search);
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $groups = array();
            if($record->groups){
                foreach ($record->groups as $group) {
                    $groups[] = $group->name;
                }
            }
            $recordArray = array(
                'id'                =>  $record->id,
                'movement'          =>  $record->movement,
                'created_at_date'   =>  \Carbon\Carbon::parse($record->created_at)->format('d/m/Y'),
                'created_at_time'   =>  \Carbon\Carbon::parse($record->created_at)->format('h:i:s a'),
                'description'       =>  $record->description,
                'amount'            =>  Currency::format($record->amount),
                'payment_with'      =>  $record->payment_with,
                'payment_with_employee'      =>  (($record->gotit) ? $record->gotit->name : '-'),
                'status'            =>  $record->status,
                'date'              =>  $record->date,
                'item_id'           =>  $record->item_id,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('employeetransactions', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\Payment::where('payment_with', $request['id'])->orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%")
                    ->orWhere('username', $search)
                    ->orWhere('mobile', $search)
                    ->orWhere('email', $search);
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $groups = array();
            if($record->groups){
                foreach ($record->groups as $group) {
                    $groups[] = $group->name;
                }
            }
            $recordArray = array(
                'id'                =>  $record->id,
                'movement'          =>  $record->movement,
                'created_at_date'   =>  \Carbon\Carbon::parse($record->created_at)->format('d/m/Y'),
                'created_at_time'   =>  \Carbon\Carbon::parse($record->created_at)->format('h:i:s a'),
                'description'       =>  $record->description,
                'amount'            =>  Currency::format($record->amount),
                'status'            =>  $record->status,
                'date'              =>  $record->date,
                'item_id'           =>  $record->item_id,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('treasurytransactions', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\Payment::where('treasury_id', $request['id'])->orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%")
                    ->orWhere('username', $search)
                    ->orWhere('mobile', $search)
                    ->orWhere('email', $search);
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $groups = array();
            if($record->groups){
                foreach ($record->groups as $group) {
                    $groups[] = $group->name;
                }
            }
            $recordArray = array(
                'id'                =>  $record->id,
                'movement'          =>  $record->movement,
                'created_at_date'   =>  \Carbon\Carbon::parse($record->created_at)->format('d/m/Y'),
                'created_at_time'   =>  \Carbon\Carbon::parse($record->created_at)->format('h:i:s a'),
                'description'       =>  $record->description,
                'amount'            =>  Currency::format($record->amount),
                'status'            =>  $record->status,
                'date'              =>  $record->date,
                'item_id'           =>  $record->item_id,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('transactions', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\Payment::orderBy($field, $sort);


        switch (Auth::getUser()->role_id) {
            case 6:
                $records    =   $records->where(function($q){
                    $q->where(function($q){
                        $q->where('type', 2);
                        $q->whereIn('for_id', Auth::getUser()->manage->pluck('id')->toArray());
                    });
                    $q->orWhere(function($q){
                        $q->whereHas('order', function($q){
                            $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                        });
                    });
                    $q->orWhere(function($q){
                        $q->whereHas('treasury', function($q){
                            $q->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                        });
                    });
                });
                break;
            case 5:
                $records    =   $records->where(function($q){
                    $q->whereHas('order', function($q){
                        $q->where('sender_id', Auth::getUser()->id);
                        $q->orWhere('receiver_id', Auth::getUser()->id);
                    });
                });
                break;
            case 4:
                if(Auth::getUser()->is_superuser){
                    $records    =   $records->where(function($q){
                        $q->where(function($q){
                            $q->where('type', 2);
                            $q->where('for_id', Auth::getUser()->office);
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('order', function($q){
                                $q->where('office_id', Auth::getUser()->office);
                            });
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('treasury', function($q){
                                $q->where('office_id', Auth::getUser()->office);
                            });
                        });
                    });
                }else{
                    $records    =   $records->where(function($q){
                        $q->where(function($q){
                            $q->where('type', 1);
                            $q->where('for_id', Auth::getUser()->id);
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('order', function($q){
                                $q->where(function($q){
                                    $q->where('assigned_id', Auth::getUser()->id);
                                });
                                $q->orWhere(function($q){
                                    $q->whereHas('manifest', function($q){
                                        $q->where(function($q) {
                                            $q->where('driver_id', Auth::getUser()->id);
                                        });
                                        $q->orWhere(function($q){
                                            $q->where('employee_id', Auth::getUser()->id);
                                        });
                                    });
                                });
                            });
                        });
                    });
                }
                break;
            case 3:
                $employees  =   \RainLab\User\Models\User::whereHas('groups',function($q){$q->whereIn('user_group_id', Auth::getUser()->groups->pluck('id')->toArray());})->pluck('id')->toArray();
                $records    =   $records->where(function($q) use($employees){
                    $q->where(function($q) use($employees){
                        $q->where('type', 1);
                        $q->whereIn('for_id', $employees);
                    });
                    $q->orWhere(function($q) use($employees){
                        $q->whereHas('order', function($q) use($employees){
                            $q->where(function($q) use($employees){
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
                    });
                });
                break;
        }

        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%")
                    ->orWhere('username', $search)
                    ->orWhere('mobile', $search)
                    ->orWhere('email', $search);
                });
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $groups = array();
            if($record->groups){
                foreach ($record->groups as $group) {
                    $groups[] = $group->name;
                }
            }
            $recordArray = array(
                'id'                =>  $record->id,
                'movement'          =>  $record->movement,
                'created_at_date'   =>  \Carbon\Carbon::parse($record->created_at)->format('d/m/Y'),
                'created_at_time'   =>  \Carbon\Carbon::parse($record->created_at)->format('h:i:s a'),
                'description'       =>  $record->description,
                'amount'            =>  Currency::format($record->amount),
                'type'              =>  $record->type,
                'payment_with'      =>  (($record->payment_with != null && $record->payment_with != $record->for_id) ? $record->payment_with : null),
                'for'               =>  (($record->type == 1) ? (($record->user) ? $record->user->name : '') : (($record->type == 2) ? ($record->branch ?$record->branch->name: '') : ($record->treasury ? $record->treasury->name: ''))),
                'gotit'             =>  (($record->type == 1 && $record->payment_with != null && $record->payment_with != $record->for_id) ? (($record->gotit) ? $record->gotit->name: '') : ''),
                'status'            =>  $record->status,
                'date'              =>  $record->date,
                'item_id'           =>  $record->item_id,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    })->middleware('web');
    Route::any('transactions/{type}', function(Request $req,$type) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\Payment::orderBy($field, $sort);
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];
                $records    =   $records->where(function($q) use($search){
                    $q->where('name', 'like', "%$search%")
                    ->orWhere('username', $search)
                    ->orWhere('mobile', $search)
                    ->orWhere('email', $search);
                });
            }

            if(isset($request['query']['created_at']) && $request['query']['created_at'] != ''){
                $search     =   $request['query']['created_at'];
                $created_at     =   explode(" - ", $search);

                if($type == 'manifest'){

                    $settings       =   \Spot\Shipment\Models\Settings::instance();
                    $start          =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($settings['dateformat'], $created_at[0]));
                    if(!isset($created_at[1])){
                        $start          =   $start->copy()->startOfDay();
                        $end            =   $start->copy()->endOfDay();
                    }else{
                        $end            =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($settings['dateformat'], $created_at[1]));
                        $start          =   $start->copy()->startOfDay();
                        $end            =   $end->copy()->endOfDay();
                    }

                    $records        =   $records->where('created_at', '>=', $start);
                    $records        =   $records->where('created_at', '<=', $end);
                }else{

                    $settings       =   \Spot\Shipment\Models\Settings::instance();
                    $start          =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($settings['dateformat'], $created_at[0]));
                    if(!isset($created_at[1])){
                        $start          =   $start->copy()->startOfDay();
                        $end            =   $start->copy()->endOfDay();
                    }else{
                        $end            =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($settings['dateformat'], $created_at[1]));
                        $start          =   $start->copy()->startOfDay();
                        $end            =   $end->copy()->endOfDay();
                    }

                    $records        =   $records->where('created_at', '>=', $start);
                    $records        =   $records->where('created_at', '<=', $end);
                }
            }
            if(isset($request['query']['for_id']) && $request['query']['for_id'] != ''){
                $search     =   $request['query']['for_id'];
                $records    =   $records->where('for_id', $search);
            }
            if(isset($request['query']['status_id']) && $request['query']['status_id'] != ''){
                $search     =   $request['query']['status_id'];
                $records    =   $records->where('status', $search);
            }
        }
        switch ($type) {
            case 'deposited':
                $records    =   $records->whereIn('movement',[2,4,6,8]);
                break;
            case 'withdrwal':
                $records    =   $records->whereIn('movement',[1,3,5,7]);
                break;
        }

        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            $groups = array();
            if($record->groups){
                foreach ($record->groups as $group) {
                    $groups[] = $group->name;
                }
            }
            $recordArray = array(
                'id'                =>  $record->id,
                'movement'          =>  $record->movement,
                'created_at_date'   =>  \Carbon\Carbon::parse($record->created_at)->format('d/m/Y'),
                'created_at_time'   =>  \Carbon\Carbon::parse($record->created_at)->format('h:i:s a'),
                'description'       =>  $record->description,
                'amount'            =>  Currency::format($record->amount),
                'status'            =>  $record->status,
                'type'              =>  $record->type,
                'payment_with'      =>  $record->payment_with,
                'for'               =>  (($record->type == 1) ? (($record->user) ? $record->user->name : '') : (($record->type == 2) ? ($record->branch ?$record->branch->name: '') : ($record->treasury ? $record->treasury->name: ''))),
                'gotit'             =>  (($record->type == 1 && $record->payment_with != null) ? (($record->gotit) ? $record->gotit->name: '') : ''),
                'date'              =>  $record->date,
                'item_id'           =>  $record->item_id,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('employeeorders', function(Request $req) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   new \Spot\Shipment\Models\Employeeorder;


        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->get();

        $recordsArray   =   array();
        $settings       = \Spot\Shipment\Models\Settings::instance();

        foreach($records as $order){

            $record =   $order->order;
            \Carbon\Carbon::setLocale(Config::get('app.locale'));


            $shipping_from_area = $shipping_to_area = $shipping_from_area_id = $shipping_to_area_id = null;
            if($record->sender_address){

                $shipping_from_area_id =   '';
                switch($settings['tracking']['default_tracking_id']){
                    case 1:
                        if($record->sender_address->country){
                            $shipping_from_area_id =   $record->sender_address->thecountry->id;
                        }
                    break;
                    case 2:
                        if($record->sender_address->state){
                            $shipping_from_area_id =   $record->sender_address->thestate->id;
                        }
                    break;
                    case 3:
                        if($record->sender_address->city){
                            $shipping_from_area_id =   $record->sender_address->thecity->id;
                        }
                    break;
                    case 4:
                        if($record->sender_address->area){
                            $shipping_from_area_id =   $record->sender_address->area->id;
                        }
                    break;
                    default:
                        if($record->sender_address->area){
                            $shipping_from_area_id =   $record->sender_address->area->id;
                        }elseif($record->sender_address->city){
                            $shipping_from_area_id =   $record->sender_address->thecity->id;
                        }elseif($record->sender_address->state){
                            $shipping_from_area_id =   $record->sender_address->thestate->id;
                        }elseif($record->sender_address->country){
                            $shipping_from_area_id =   $record->sender_address->thecountry->id;
                        }
                }

                if($record->sender_address->area){
                    $shipping_from_area =   $record->sender_address->area->name;
                }elseif($record->sender_address->city){
                    $shipping_from_area =   $record->sender_address->thecity->name;
                }elseif($record->sender_address->state){
                    $shipping_from_area =   $record->sender_address->thestate->name;
                }elseif($record->sender_address->country){
                    $shipping_from_area =   $record->sender_address->thecountry->name;
                }
            }
            if($record->receiver_address){

                $shipping_to_area_id =   '';
                switch($settings['tracking']['default_tracking_id']){
                    case 1:
                        if($record->receiver_address->country){
                            $shipping_to_area_id =   $record->receiver_address->thecountry->id;
                        }
                    break;
                    case 2:
                        if($record->receiver_address->state){
                            $shipping_to_area_id =   $record->receiver_address->thestate->id;
                        }
                    break;
                    case 3:
                        if($record->receiver_address->city){
                            $shipping_to_area_id =   $record->receiver_address->thecity->id;
                        }
                    break;
                    case 4:
                        if($record->receiver_address->area){
                            $shipping_to_area_id =   $record->receiver_address->area->id;
                        }
                    break;
                    default:
                        if($record->receiver_address->area){
                            $shipping_to_area_id =   $record->receiver_address->area->id;
                        }elseif($record->receiver_address->city){
                            $shipping_to_area_id =   $record->receiver_address->thecity->id;
                        }elseif($record->receiver_address->state){
                            $shipping_to_area_id =   $record->receiver_address->thestate->id;
                        }elseif($record->receiver_address->country){
                            $shipping_to_area_id =   $record->receiver_address->thecountry->id;
                        }
                }

                if($record->receiver_address->area){
                    $shipping_to_area =   $record->receiver_address->area->name;
                }elseif($record->receiver_address->city){
                    $shipping_to_area =   $record->receiver_address->thecity->name;
                }elseif($record->receiver_address->state){
                    $shipping_to_area =   $record->receiver_address->thestate->name;
                }elseif($record->receiver_address->country){
                    $shipping_to_area =   $record->receiver_address->thecountry->name;
                }
            }

            $recordArray = array(
                'id'                =>  $record->id,
                'created_at_date'   =>  \Carbon\Carbon::parse($record->created_at)->format('d/m/Y'),
                'created_at_time'   =>  \Carbon\Carbon::parse($record->created_at)->format('h:i:s a'),
                'channel'           =>  $record->channel,
                'office'            =>  $record->office->name,
                'payment'           =>  $record->payment_type,
                'sender_id'         =>  $record->sender_id,
                'sender'            =>  $record->sender,
                'receiver'          =>  (($record->receiver) ? $record->receiver : null),
                'type'              =>  $record->type,
                'status'            =>  $record->status,
                'requested'         =>  $record->requested,
                'manifest_id'       =>  $record->manifest_id,
                'assigned_id'       =>  $record->assigned_id,
                'shipping_number'   =>  $record->number,
                'shipping_from_area'=>  $shipping_from_area,
                'shipping_to_area'  =>  $shipping_to_area,
                'shipping_from'     =>  $record->sender_address,
                'shipping_to'       =>  (($record->receiver_address) ? $record->receiver_address : null),
                'shipping_area'     =>  (($record->type == 1) ? $shipping_from_area_id : $shipping_to_area_id),
            );

            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    });
    Route::any('shipments/{type}', function(Request $req,$type) {
        $request = post();
        $page                       =   $request['pagination']['page'];
        $perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        if($type == 'manifest'){
            $records    =   \Spot\Shipment\Models\Manifest::orderBy($field, $sort);


            switch (Auth::getUser()->role_id) {
                case 6:
                    $employees  =   \RainLab\User\Models\User::whereIn('office',Auth::getUser()->manage->pluck('id')->toArray())->pluck('id')->toArray();
                    $records    =   $records->where(function($q) use($employees){
                        $q->where(function($q) use($employees){
                            $q->whereIn('driver_id', $employees);
                        });
                        $q->orWhere(function($q) use($employees){
                            $q->whereIn('employee_id', $employees);
                        });
                    });
                    break;
                case 4:
                    if(Auth::getUser()->is_superuser){
                        $employees  =   \RainLab\User\Models\User::where('office',Auth::getUser()->office)->pluck('id')->toArray();
                        $records    =   $records->where(function($q) use($employees){
                            $q->where(function($q) use($employees){
                                $q->whereIn('driver_id', $employees);
                            });
                            $q->orWhere(function($q) use($employees){
                                $q->whereIn('employee_id', $employees);
                            });
                        });

                    }else{
                        $records    =   $records->where(function($q){
                            $q->where(function($q) {
                                $q->where('driver_id', Auth::getUser()->id);
                            });
                            $q->orWhere(function($q){
                                $q->where('employee_id', Auth::getUser()->id);
                            });
                        });
                    }
                    break;
                case 3:
                    $employees  =   \RainLab\User\Models\User::whereHas('groups',function($q){$q->whereIn('user_group_id', Auth::getUser()->groups->pluck('id')->toArray());})->pluck('id')->toArray();
                    $records    =   $records->where(function($q) use($employees){
                        $q->where(function($q) use($employees){
                            $q->whereIn('driver_id', $employees);
                        });
                        $q->orWhere(function($q) use($employees){
                            $q->whereIn('employee_id', $employees);
                        });
                    });
                    break;
            }

        }else{

            if($type == 'requests'){
                $records    =   \Spot\Shipment\Models\Order::where('requested',0)->orderBy($field, $sort);
            }elseif($type == 'approved'){
                //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received | 10 = return fees | 11 = Delivery of return discards to the driver | 12 = Delivered & returned
                $records    =   \Spot\Shipment\Models\Order::where('requested',1)->orderBy($field, $sort);
            }elseif($type == 'assigned'){
                $records    =   \Spot\Shipment\Models\Order::whereIn('requested',[1,5,10,7])->where(function($q){$q->where('assigned_id', '!=', null)->orWhere('manifest_id', '!=', null);})->orderBy($field, $sort);
            }elseif($type == 'withdriver'){
                $records    =   \Spot\Shipment\Models\Order::whereIn('requested',[3,6,11])->orderBy($field, $sort);
            }elseif($type == 'processing'){
                $records    =   \Spot\Shipment\Models\Order::whereIn('requested',[3,6,7,8,10,11])->orderBy($field, $sort);
            }elseif($type == 'delayed'){
                $records    =   \Spot\Shipment\Models\Order::whereIn('requested',[0,1,3])->where('delivery_date', '<', \Carbon\Carbon::now()->format('Y-m-d'))->orderBy($field, $sort);
            }elseif($type == 'saved'){
                $records    =   \Spot\Shipment\Models\Order::where('requested',100)->orderBy($field, $sort);
            }elseif($type == 'stock'){
                $records    =   \Spot\Shipment\Models\Order::where('requested',7)->orderBy($field, $sort);
            }elseif($type == 'postponed'){
                $records    =   \Spot\Shipment\Models\Order::where('postponed',1)->whereIn('requested',[1,3,5,6,7,10,11])->orderBy($field, $sort);
            }elseif($type == 'delivered'){
                $records    =   \Spot\Shipment\Models\Order::whereIn('requested',[4,10,11,12])->orderBy($field, $sort);
            }elseif($type == 'supplied'){
                $records    =   \Spot\Shipment\Models\Order::where('requested',12)->orderBy($field, $sort);
            }elseif($type == 'manifestorders'){
                $records    =   \Spot\Shipment\Models\Order::where('manifest_id', $request['id'])->orderBy($field, $sort);
            }elseif($type == 'clientorders'){
                $records    =   \Spot\Shipment\Models\Order::where(function($q) use($request){$q->where('sender_id', $request['id'])->orWhere('receiver_id', $request['id']);})->orderBy($field, $sort);
            }else{
                $records    =   \Spot\Shipment\Models\Order::where('requested','!=',100)->orderBy($field, $sort);

            }



            switch (Auth::getUser()->role_id) {
                case 6:
                    $records    =   $records->whereIn('office_id', Auth::getUser()->manage->pluck('id')->toArray());
                    break;
                case 5:
                    $records    =   $records->where(function($q){
                        $q->where('sender_id', Auth::getUser()->id);
                        $q->orWhere('receiver_id', Auth::getUser()->id);
                    });
                    break;
                case 4:
                    if(Auth::getUser()->is_superuser){
                        $records    =   $records->where(function($q){
                            $q->where('office_id', Auth::getUser()->office);
                            $q->orWhere(function($q){
                                //Get all employees
                                $q->where('assigned_id', Auth::getUser()->id);
                            });
                            $q->orWhere(function($q){
                                $q->whereHas('manifest', function($q){
                                    $q->where(function($q) {
                                        $q->where('driver_id', Auth::getUser()->id);
                                    });
                                    $q->orWhere(function($q){
                                        $q->where('employee_id', Auth::getUser()->id);
                                    });
                                });
                            });
                        });
                    }else{
                        $records    =   $records->where(function($q){
                            $q->where(function($q){
                                //Get all employees
                                $q->where('assigned_id', Auth::getUser()->id);
                            });
                            $q->orWhere(function($q){
                                $q->whereHas('manifest', function($q){
                                    $q->where(function($q) {
                                        $q->where('driver_id', Auth::getUser()->id);
                                    });
                                    $q->orWhere(function($q){
                                        $q->where('employee_id', Auth::getUser()->id);
                                    });
                                });
                            });
                        });
                    }
                    break;
                case 3:
                    $employees  =   \RainLab\User\Models\User::whereHas('groups',function($q){$q->whereIn('user_group_id', Auth::getUser()->groups->pluck('id')->toArray());})->pluck('id')->toArray();
                    $records    =   $records->where(function($q) use($employees){
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
        }
        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];

                if($type == 'manifest'){
                    $records    =   $records->where(function($q) use($search){
                        $q->where('id', $search)
                        ->orWhere(function($q) use ($search){
                            $q->whereHas('driver',function($q) use($search){
                                $q->where('name', 'like', "%$search%")
                                ->orWhere('username', $search)
                                ->orWhere('mobile', $search)
                                ->orWhere('email', $search);
                            });
                        })
                        ->orWhere(function($q) use ($search){
                            $q->whereHas('user',function($q) use($search){
                                $q->where('name', 'like', "%$search%")
                                ->orWhere('username', $search)
                                ->orWhere('mobile', $search)
                                ->orWhere('email', $search);
                            });
                        })
                        ->orWhere(function($q) use ($search){
                            $q->whereHas('car',function($q) use($search){
                                $q->where('name', 'like', "%$search%");
                            });
                        })
                        ->orWhere(function($q) use ($search){
                            $q->whereHas('orders',function($q) use($search){
                                $q->where('id', $search)
                                ->orWhere('number', $search);
                            });
                        });
                    });
                }else{
                    $records    =   $records->where(function($q) use($search){
                        $q->where('id', $search);

                        $settings       = \Spot\Shipment\Models\Settings::instance();
                        $length         = strlen($settings['tracking']['prefix_order']);
                        $prefix         = substr($search, 0, $length);
                        if (strcasecmp($prefix, $settings['tracking']['prefix_order']) == 0) {
                            $search =   str_ireplace($settings['tracking']['prefix_order'],'',$search);
                        }
                        $q->orWhere('number', 'like', "%$search%");
                        $q->orWhere(function($q) use ($search){
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
                }
            }
            if(isset($request['query']['created_at']) && $request['query']['created_at'] != ''){
                $search     =   $request['query']['created_at'];
                $created_at     =   explode(" - ", $search);

                if($type == 'manifest'){

                    $settings       =   \Spot\Shipment\Models\Settings::instance();
                    $start          =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($settings['dateformat'], $created_at[0]));
                    if(!isset($created_at[1])){
                        $start          =   $start->copy()->startOfDay();
                        $end            =   $start->copy()->endOfDay();
                    }else{
                        $end            =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($settings['dateformat'], $created_at[1]));
                        $start          =   $start->copy()->startOfDay();
                        $end            =   $end->copy()->endOfDay();
                    }

                    $records        =   $records->where('created_at', '>=', $start);
                    $records        =   $records->where('created_at', '<=', $end);
                }else{

                    $settings       =   \Spot\Shipment\Models\Settings::instance();
                    $start          =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($settings['dateformat'], $created_at[0]));
                    if(!isset($created_at[1])){
                        $start          =   $start->copy()->startOfDay();
                        $end            =   $start->copy()->endOfDay();
                    }else{
                        $end            =   \Carbon\Carbon::parse(\Carbon\Carbon::createFromFormat($settings['dateformat'], $created_at[1]));
                        $start          =   $start->copy()->startOfDay();
                        $end            =   $end->copy()->endOfDay();
                    }

                    $records        =   $records->where('created_at', '>=', $start);
                    $records        =   $records->where('created_at', '<=', $end);


                }
            }
            if(isset($request['query']['type']) && $request['query']['type'] != ''){
                $search     =   $request['query']['type'];
                if($type!== 'manifest'){
                    $records    =   $records->where('type', $search);
                }
            }
            if(isset($request['query']['sender_id']) && $request['query']['sender_id'] != ''){
                $search     =   $request['query']['sender_id'];
                if($type!== 'manifest'){
                    $records    =   $records->where('sender_id', $search);
                }
            }
            if(isset($request['query']['employee_id']) && $request['query']['employee_id'] != ''){
                $search     =   $request['query']['employee_id'];

                if($type == 'manifest'){
                    $records    =   $records->where(function($q) use($search){
                        $q->where('driver_id', $search)
                        ->orWhere('employee_id', $search);
                    });
                }else{
                    $records    =   $records->where(function($q) use($search){
                        $q->where('assigned_id', $search)
                        ->orWhere(function($q) use($search){
                            $q->whereHas('manifest',function($q) use($search){
                                $q->where('driver_id', $search)
                                ->orWhere('employee_id', $search);
                            });
                        });
                    });
                }
            }
        }
        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy($field, $sort)->get();

        $recordsArray   =   array();

        $settings       =   \Spot\Shipment\Models\Settings::instance();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));
            if($type == 'manifest'){
                $recordArray = array(
                    'id'                =>  $record->id,
                    'created_at_date'   =>  \Carbon\Carbon::parse($record->created_at)->format('d/m/Y'),
                    'created_at_time'   =>  \Carbon\Carbon::parse($record->created_at)->format('h:i:s a'),
                    'car'               =>  (($record->car) ? $record->car->name : '-'),
                    'driver'            =>  (($record->driver) ? $record->driver->name : '-'),
                    'employee'            =>  (($record->employee) ? $record->employee->name : '-'),
                    'user'              =>  (($record->user) ? $record->user->name : '-'),
                    'orders'            =>  $record->orders->count(),
                );
            }else{
                $shipping_from_area = $shipping_to_area = $shipping_from_area_id = $shipping_to_area_id = null;
                if($record->sender_address){

                    $shipping_from_area_id =   '';
                    switch($settings['tracking']['default_tracking_id']){
                        case 1:
                            if($record->sender_address->thecountry){
                                $shipping_from_area_id =   $record->sender_address->thecountry->id;
                            }
                        break;
                        case 2:
                            if($record->sender_address->thestate){
                                $shipping_from_area_id =   $record->sender_address->thestate->id;
                            }
                        break;
                        case 3:
                            if($record->sender_address->thecity){
                                $shipping_from_area_id =   $record->sender_address->thecity->id;
                            }
                        break;
                        case 4:
                            if($record->sender_address->area){
                                $shipping_from_area_id =   $record->sender_address->area->id;
                            }
                        break;
                        default:
                            if($record->sender_address->area){
                                $shipping_from_area_id =   $record->sender_address->area->id;
                            }elseif($record->sender_address->thecity){
                                $shipping_from_area_id =   $record->sender_address->thecity->id;
                            }elseif($record->sender_address->thestate){
                                $shipping_from_area_id =   $record->sender_address->thestate->id;
                            }elseif($record->sender_address->thecountry){
                                $shipping_from_area_id =   $record->sender_address->thecountry->id;
                            }
                    }

                    if($record->sender_address->area){
                        $shipping_from_area =   $record->sender_address->area->name;
                    }elseif($record->sender_address->thecity){
                        $shipping_from_area =   $record->sender_address->thecity->name;
                    }elseif($record->sender_address->thestate){
                        $shipping_from_area =   $record->sender_address->thestate->name;
                    }elseif($record->sender_address->thecountry){
                        $shipping_from_area =   $record->sender_address->thecountry->name;
                    }
                }
                if($record->receiver_address){

                    $shipping_to_area_id =   '';
                    switch($settings['tracking']['default_tracking_id']){
                        case 1:
                            if($record->receiver_address->thecountry){
                                $shipping_to_area_id =   $record->receiver_address->thecountry->id;
                            }
                        break;
                        case 2:
                            if($record->receiver_address->thestate){
                                $shipping_to_area_id =   $record->receiver_address->thestate->id;
                            }
                        break;
                        case 3:
                            if($record->receiver_address->thecity){
                                $shipping_to_area_id =   $record->receiver_address->thecity->id;
                            }
                        break;
                        case 4:
                            if($record->receiver_address->area){
                                $shipping_to_area_id =   $record->receiver_address->area->id;
                            }
                        break;
                        default:
                            if($record->receiver_address->area){
                                $shipping_to_area_id =   $record->receiver_address->area->id;
                            }elseif($record->receiver_address->thecity){
                                $shipping_to_area_id =   $record->receiver_address->thecity->id;
                            }elseif($record->receiver_address->thestate){
                                $shipping_to_area_id =   $record->receiver_address->thestate->id;
                            }elseif($record->receiver_address->country && $record->receiver_address->thecountry){
                                $shipping_to_area_id =   $record->receiver_address->thecountry->id;
                            }
                    }

                    if($record->receiver_address->area){
                        $shipping_to_area =   $record->receiver_address->area->name;
                    }elseif($record->receiver_address->thecity){
                        $shipping_to_area =   $record->receiver_address->thecity->name;
                    }elseif($record->receiver_address->thestate){
                        $shipping_to_area =   $record->receiver_address->thestate->name;
                    }elseif($record->receiver_address->country && $record->receiver_address->thecountry){
                        $shipping_to_area =   $record->receiver_address->thecountry->name;
                    }
                }

                $delayed    = 0;
                $today              = \Carbon\Carbon::now();
                if($record->delivery_date){
                    $deliverydate       = \Carbon\Carbon::parse($record->delivery_date);
                }else{
                    $shipdate           = \Carbon\Carbon::parse($record->ship_date);
                    if($record->deliverytime){
                        $deliverydate       = $shipdate->addHours($record->deliverytime->count);
                    }else{
                        $deliverydate       = $shipdate->addHours(24);
                    }
                }
                $time_diff          = $today->diffInDays($deliverydate, false);

                if($time_diff < 0){
                    if($record->requested == 0 or $record->requested == 1 or $record->requested == 3){
                        $delayed    = 1;
                    }
                }


                $recordArray = array(
                    'id'                =>  $record->id,
                    'created_at_date'   =>  \Carbon\Carbon::parse($record->created_at)->format('d/m/Y'),
                    'created_at_time'   =>  \Carbon\Carbon::parse($record->created_at)->format('h:i:s a'),
                    'type'              =>  $record->type,
                    'channel'           =>  $record->channel,
                    'office'            =>  (($record->office) ? $record->office->name : null),
                    'payment'           =>  (($record->payment_type) ?$record->payment_type:null),
                    'sender'            =>  (($record->sender)?$record->sender : null),
                    'receiver'          =>  (($record->receiver) ? $record->receiver : null),
                    'status'            =>  $record->status,
                    'requested'         =>  $record->requested,
                    'delayed'           =>  $delayed,
                    'manifest_id'       =>  $record->manifest_id,
                    'assigned_id'       =>  (($record->assigned_id) ? $record->assigned_id : null) ,
                    'shipping_number'   =>  $record->number,
                    'shipping_from_area'=>  $shipping_from_area,
                    'shipping_to_area'  =>  $shipping_to_area,
                    'shipping_from'     =>  (($record->sender_address)? $record->sender_address :null),
                    'shipping_to'       =>  (($record->receiver_address) ? $record->receiver_address : null),
                    'shipping_area'     =>  (($record->type == 1) ? $shipping_from_area_id : $shipping_to_area_id),
                    'time_diff'         =>  $time_diff,
                );
            }
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            "page"=> $page,
                            "pages"=> $pages,
                            "perpage"=> $perpage,
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    })->middleware('web');
    Route::any('dashboardshipments', function(Request $req) {
        $request = post();
        //$page                       =   $request['pagination']['page'];
        //$perpage                    =   $request['pagination']['perpage'];
        $sort                       =   ((isset($request['sort']['sort']))? $request['sort']['sort'] : 'desc');
        $field                      =   ((isset($request['sort']['field']))? $request['sort']['field'] : 'id');
        $skip                       =   intval(($page-1)*$perpage);

        $records    =   \Spot\Shipment\Models\Order::orderBy($field, $sort);

        switch (Auth::getUser()->role_id) {
            case 1:
                $records    =   $records->where('requested','!=',100);
                break;
            case 2:
                $records    =   $records->where('requested','!=',100);
                break;
            case 6:
                $records    =   $records->whereIn('office_id', Auth::getUser()->where('requested','!=',100)->manage->pluck('id')->toArray());
                break;
            case 5:
                $records    =   $records->where(function($q){
                    $q->where('sender_id', Auth::getUser()->id);
                    $q->orWhere('receiver_id', Auth::getUser()->id);
                });
                break;
            case 4:
                if(Auth::getUser()->is_superuser){
                    $records    =   $records->where('requested','!=',100)->where(function($q){
                        $q->where('office_id', Auth::getUser()->office);
                        $q->orWhere(function($q){
                            //Get all employees
                            $q->where('assigned_id', Auth::getUser()->id);
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('manifest', function($q){
                                $q->where(function($q) {
                                    $q->where('driver_id', Auth::getUser()->id);
                                });
                                $q->orWhere(function($q){
                                    $q->where('employee_id', Auth::getUser()->id);
                                });
                            });
                        });
                    });
                }else{
                    $records    =   $records->where('requested','!=',100)->where(function($q){
                        $q->where(function($q){
                            //Get all employees
                            $q->where('assigned_id', Auth::getUser()->id);
                        });
                        $q->orWhere(function($q){
                            $q->whereHas('manifest', function($q){
                                $q->where(function($q) {
                                    $q->where('driver_id', Auth::getUser()->id);
                                });
                                $q->orWhere(function($q){
                                    $q->where('employee_id', Auth::getUser()->id);
                                });
                            });
                        });
                    });
                }
                break;
            case 3:
                $employees  =   \RainLab\User\Models\User::whereHas('groups',function($q){$q->whereIn('user_group_id', Auth::getUser()->groups->pluck('id')->toArray());})->pluck('id')->toArray();
                $records    =   $records->where('requested','!=',100)->where(function($q) use($employees){
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

        if(isset($request['query'])){
            if(isset($request['query']['generalSearch']) && $request['query']['generalSearch'] != ''){
                $search     =   $request['query']['generalSearch'];

                $records    =   $records->where(function($q) use($search){
                    $q->where('id', $search)
                    ->orWhere('number', 'like', "%$search%")
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
            }
        }

        if(isset($request['start'])){
            $records    =   $records->where('updated_at', '>=', $request['start'])->where('updated_at', '<=', $request['end']);
        }

        $count      =   $records->count();
        $records    =   $records->skip($skip)->take($perpage)->orderBy('updated_at', 'asc')->get();

        $recordsArray   =   array();
        $settings       = \Spot\Shipment\Models\Settings::instance();
        foreach($records as $record){
            \Carbon\Carbon::setLocale(Config::get('app.locale'));


            $shipping_from_area = $shipping_to_area = $shipping_from_area_id = $shipping_to_area_id = null;
            if($record->sender_address){

                $shipping_from_area_id =   '';
                switch($settings['tracking']['default_tracking_id']){
                    case 1:
                        if($record->sender_address->thecountry){
                            $shipping_from_area_id =   $record->sender_address->thecountry->id;
                        }
                    break;
                    case 2:
                        if($record->sender_address->thestate){
                            $shipping_from_area_id =   $record->sender_address->thestate->id;
                        }
                    break;
                    case 3:
                        if($record->sender_address->thecity){
                            $shipping_from_area_id =   $record->sender_address->thecity->id;
                        }
                    break;
                    case 4:
                        if($record->sender_address->area){
                            $shipping_from_area_id =   $record->sender_address->area->id;
                        }
                    break;
                    default:
                        if($record->sender_address->area){
                            $shipping_from_area_id =   $record->sender_address->area->id;
                        }elseif($record->sender_address->thecity){
                            $shipping_from_area_id =   $record->sender_address->thecity->id;
                        }elseif($record->sender_address->thestate){
                            $shipping_from_area_id =   $record->sender_address->thestate->id;
                        }elseif($record->sender_address->thecountry){
                            $shipping_from_area_id =   $record->sender_address->thecountry->id;
                        }
                }

                if($record->sender_address->area){
                    $shipping_from_area =   $record->sender_address->area->name;
                }elseif($record->sender_address->thecity){
                    $shipping_from_area =   $record->sender_address->thecity->name;
                }elseif($record->sender_address->thestate){
                    $shipping_from_area =   $record->sender_address->thestate->name;
                }elseif($record->sender_address->thecountry){
                    $shipping_from_area =   $record->sender_address->thecountry->name;
                }
            }
            if($record->receiver_address){

                $shipping_to_area_id =   '';
                switch($settings['tracking']['default_tracking_id']){
                    case 1:
                        if($record->receiver_address->thecountry){
                            $shipping_to_area_id =   $record->receiver_address->thecountry->id;
                        }
                    break;
                    case 2:
                        if($record->receiver_address->thestate){
                            $shipping_to_area_id =   $record->receiver_address->thestate->id;
                        }
                    break;
                    case 3:
                        if($record->receiver_address->thecity){
                            $shipping_to_area_id =   $record->receiver_address->thecity->id;
                        }
                    break;
                    case 4:
                        if($record->receiver_address->area){
                            $shipping_to_area_id =   $record->receiver_address->area->id;
                        }
                    break;
                    default:
                        if($record->receiver_address->area){
                            $shipping_to_area_id =   $record->receiver_address->area->id;
                        }elseif($record->receiver_address->thecity){
                            $shipping_to_area_id =   $record->receiver_address->thecity->id;
                        }elseif($record->receiver_address->thestate){
                            $shipping_to_area_id =   $record->receiver_address->thestate->id;
                        }elseif($record->receiver_address->thecountry && $record->receiver_address->thecountry){
                            $shipping_to_area_id =   $record->receiver_address->thecountry->id;
                        }
                }

                if($record->receiver_address->area){
                    $shipping_to_area =   $record->receiver_address->area->name;
                }elseif($record->receiver_address->thecity){
                    $shipping_to_area =   $record->receiver_address->thecity->name;
                }elseif($record->receiver_address->thestate){
                    $shipping_to_area =   $record->receiver_address->thestate->name;
                }elseif($record->receiver_address->thecountry && $record->receiver_address->thecountry){
                    $shipping_to_area =   $record->receiver_address->thecountry->name;
                }
            }

            $delayed    = 0;
            $today              = \Carbon\Carbon::now();
            if($record->delivery_date){
                $deliverydate       = \Carbon\Carbon::parse($record->delivery_date);
            }else{
                $shipdate           = \Carbon\Carbon::parse($record->ship_date);
                $deliverydate       = $shipdate->addHours($record->deliverytime->count);
            }
            $time_diff          = $today->diffInDays($deliverydate, false);

            if($time_diff < 0){
                if($record->requested == 0 or $record->requested == 1 or $record->requested == 3){
                    $delayed    = 1;
                }
            }
            //0 = Pending | 1 = Approved | 2 = Refused | 3 = Delivered to driver | 4 = Delivered | 5 = Return request | 6 = Delivery of discards to the driver | 7 = Supply in stock | 8 = Returned | 9 = received

            $settings       =   \Spot\Shipment\Models\Settings::instance();

            $recordArray = array(
                'id'                =>  $record->id,
                'created_at_date'   =>  \Carbon\Carbon::parse($record->created_at)->format($settings['dateformat']),
                'created_at_time'   =>  \Carbon\Carbon::parse($record->created_at)->format('h:i:s a'),
                'channel'           =>  $record->channel,
                'office'            =>  ($record->office) ? $record->office->name: null,
                'payment'           =>  $record->payment_type,
                'sender'            =>  $record->sender,
                'receiver'          =>  (($record->receiver) ? $record->receiver : null),
                'sender_id'         =>  $record->sender_id,
                'type'              =>  $record->type,
                'requested'         =>  $record->requested,
                'status'            =>  $record->status,
                'delayed'           =>  $delayed,
                'manifest_id'       =>  $record->manifest_id,
                'assigned_id'       =>  $record->assigned_id,
                'shipping_number'   =>  $record->number,
                'shipping_from_area'=>  $shipping_from_area,
                'shipping_to_area'  =>  $shipping_to_area,
                'shipping_from'     =>  $record->sender_address,
                'shipping_to'       =>  (($record->receiver_address) ? $record->receiver_address : null),
                'shipping_area'     =>  (($record->type == 1) ? $shipping_from_area_id : $shipping_to_area_id),
                'time_diff'         =>  $time_diff,
            );
            array_push($recordsArray,$recordArray);
        }

        $total      =   $count;
        $pages      =   intval($count/$perpage);

        $full_data  =   array(
            'meta'  =>  array(
                            
                            "total"=> $total,
                            "sort"=> $sort,
                            "field"=> $field
                        ),
            'data'  =>  $recordsArray,
        );
        die(json_encode($full_data));

    })->middleware('web');
});
