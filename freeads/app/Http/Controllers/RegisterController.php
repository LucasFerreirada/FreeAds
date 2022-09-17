<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;


class InscriptionController extends Controller
{
    function ShowInscription()
    {
        return view('inscription');
    }
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password']));
        event(new Registered($user));
        auth()->login($user);

        return redirect()->to('/inscription/');
    }
}
