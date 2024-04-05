<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\frenchaichi;

class HomeController extends Controller
{
    function frenchaichies_index(){

        return view('pages.signup');

    }
    
}
