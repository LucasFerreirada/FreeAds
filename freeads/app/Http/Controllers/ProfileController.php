<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function ShowProfile()
    {
        return view('profile');
    }
    function UpdateDelete()
    {
        if (request('delete') == 'delete') {
            User::where('id', auth()->user()->id)->delete();
            auth()->logout();
            return redirect()->to('/login/');
        } else {
            $this->validate(request(), [
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required'
            ]);
            User::where('id', auth()->user()->id)->update([
                'name' => request('name'),
                'email' => request('email'),
                'password' => request('password')
            ]);
            return redirect()->to('/profile/');
        }
    }
}
