<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContinentController extends Controller
{
    public function index(){
        $title='Welcome to the Continents Page!!';
        $description="Created by Mahrukh";
        $data=[
            'continent1'=>'Asia',
            'continent2'=>'Africa'
        ];
        //return view('continents.index');
        return view('continents.index',[
            'data'=>$data
        ]
        );
    }
}
