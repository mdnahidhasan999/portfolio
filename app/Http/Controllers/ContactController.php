<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    function index(Request $request):string
    {
     return "Contact page";
    }
}
