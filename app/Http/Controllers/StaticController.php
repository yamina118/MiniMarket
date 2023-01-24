<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function home(){
        return view('main');

    }
    public function categories(){
        return view('categories');


    }

    public function sofasarmchairs(){
        return view('sofas&armchairs');
    }   
    public function storagesysunits(){
        return view('storagesys&units');
    }   
    public function tableschairs(){
        return view('tables&chairs');
    }   
   
}
