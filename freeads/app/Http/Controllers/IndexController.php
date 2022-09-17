<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function ShowIndex()
    {
        return view('index');
    }
}
