<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OsisController extends Controller
{
    function index(){
        return view('osis/home');
    }
}
