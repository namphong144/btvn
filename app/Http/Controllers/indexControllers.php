<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexControllers extends Controller
{
    function index(){
        return view('index');
    }
}
