<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function cat_main(){
        return view("user.category.bechelor.cat-main");
    }
    public function cat_detail(){
        return view("user.category.bechelor.cat-detail");
    }

}
