<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view("user.home");
    }
    public function bechelor(){
        return view("user.bechelor");
    }
    public function masters(){
        return view("user.masters");
    }
    public function intstudent(){
        return view("user.intstudent");
    }
    public function living(){
        return view("user.living");
    }
    public function contact(){
        return view("user.contact");
    }
    public function institute(){
        return view("user.institute");
    }
}
