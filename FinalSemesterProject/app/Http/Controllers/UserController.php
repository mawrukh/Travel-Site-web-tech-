<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view("show");
    }

    public function ajaxCall(){
        // $data = array('Pakistan: Lahore, Islamabad, Karachi, Quetta', 'Saudi Arabia: Riyadh, Jeddah, Abha, Makkah', 'USA: New York, Los Angeles');
        $data = array('Follow on Facebook, Instagram', 'And Twitter for Updates related to trip');
        return response()->json(["data"=>$data]);
    }
}
