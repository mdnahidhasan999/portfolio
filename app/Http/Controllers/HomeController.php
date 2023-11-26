<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index(Request $request):string
    {
     return "Home page";
    }
}
