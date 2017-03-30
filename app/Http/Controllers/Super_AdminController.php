<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sentinel;
use Activation;
use App\User;
use Mail;

class Super_AdminController extends Controller
{
	public function super_admin()
	{
		return view('super_admin.super_admin');
	}

    public function register()
    {
    	return view('super_admin.register-admin');
    }
    public function usersList()
    {
        return view('super_admin.userlist-superadmin');
    }


    public function postRegister(Request $request)
    {
    	$user = Sentinel::register($request->all());
        $activation = Activation::create($user);
    	$role = Sentinel::findRoleBySlug('admin');

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
}
