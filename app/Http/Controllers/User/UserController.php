<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Logo;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function temp($id){
        $logo = Logo::find($id);
        return view("user.template", compact('logo'));
    }
    // public function temp($id)
    // {
    //     $logo = Logo::latest()->first();
    //     return view('user.template', compact('logo'));
    // }
    
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
