<?php

namespace App\Http\Controllers;

use App\Models\Smartphone;
use Illuminate\Http\Request;

class SmartphoneController extends Controller
{
    public function show(){
        Smartphone::all();
        return view('smart',['smartphones'=>Smartphone::all()]);
    }

}
