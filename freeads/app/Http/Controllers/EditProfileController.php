<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditProfileController extends Controller
{
    function ShowEditProfile()
    {
        return view('editProfile');
    }
}
