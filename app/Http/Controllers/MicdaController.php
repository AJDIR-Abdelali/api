<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MicdaController extends Controller
{
    public function description($year){
        return view('test', ['year'=>$year]);
    }
}
