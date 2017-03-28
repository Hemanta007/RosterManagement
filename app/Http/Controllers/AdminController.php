<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\User;
use Mail;

class AdminController extends Controller
{
 	public function admin()
 	{
 		return view('admin.admin');
 	}

 	public function usersList()
 	{
 		return view('admin.userslist');
 	}

 	public function roster()
 	{
 		return view ('admin.roster');
 	}

 	public function register()
 	{
 		return view ('admin.register-user');
 	}


    public function postRegister(Request $request)
    {
    	$user = Sentinel::register($request->all());
        $activation = Activation::create($user);
    	$role = Sentinel::findRoleBySlug('end_users');

    	$role->users()->attach($user);
        $this->sendEmail($user, $activation->code);

    	return redirect('/');
    }

    private function sendEmail($user, $code)
    {

        Mail::send('emails.activation', [
            'user' => $user,
            'code' => $code

            ], function($message) use ($user){
                $message->to($user->email);

                $message->subject("hello $user->first_name, activate your account.");
            });
    }

    public function getuser()
    {
        $users = user::all();
        return view('admin.userslist', ['users'=> $users]);
    }

}
