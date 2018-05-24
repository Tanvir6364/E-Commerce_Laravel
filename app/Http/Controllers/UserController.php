<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Mail;
use App\Mail\NewUserMail;
use Auth;

class UserController extends Controller
{
    public function manageUser(){
        //$users=User::all();
        $users=User::paginate(10);
        return view('admin.user.manageUser',['users'=>$users]);
    }
    public function sendMail(){
    	return view('admin.email.email');
    }
    public function newMailSend(){
    	Mail::to(Auth::user()->email)->send(new NewUserMail());
    	return redirect('/dashboard');
    }
}
