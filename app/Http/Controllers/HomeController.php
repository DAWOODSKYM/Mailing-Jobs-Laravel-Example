<?php

namespace App\Http\Controllers;

use App\Jobs\SendConfirmMail;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //sudo service supervisor start
    public function index(){
       return view('welcome');
    }

    public function send(){
        $user =User::where(['id'=>1])->first();
        $this->dispatch(new SendConfirmMail($user));
    }
}
