<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signUp(Request $request){
       $user = new User();
       $user->name = "Demo user three";
       $user->phone = "111-222-333";
       $user->email = $request->email;
       $user->dateOfBirth = "01/10/1991";
       $user->address = "#13 agbani lane Enugu";
       $user->password = bcrypt($request->password);
       $user->cpassword = $request->password;
       $user->role_id = 3;
       $user->save();
       return redirect()->back()->with('message', 'user registered successfully!');

    }

    public function loginUser(Login $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect("dashboard");
        }
        return redirect()->back()->with('message', 'invalid email/password. try again');
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
