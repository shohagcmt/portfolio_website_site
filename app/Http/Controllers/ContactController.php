<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function Contactpage(){
        return view('Contact');
    }
}
