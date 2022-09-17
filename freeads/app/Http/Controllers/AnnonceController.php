<?php

namespace App\Http\Controllers;

use App\Models\Annonce;


use Illuminate\Http\Request;

class AnnonceController extends Controller
{
    function ShowAnnonce()
    {
        $annonces = Annonce::all();
        return view('annonce', ['annonce' => $annonces]);
    }
    function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required'
        ]);
        $annonce = new Annonce();
        $annonce->title = request('title');
        $annonce->description = request('description');
        $annonce->price = request('price');
        $annonce->image = request('image');
        $annonce->save();
        return redirect()->to('/annonce/');
    }
    function showAnnonceId($id)
    {
        $annonce = Annonce::find($id);
        return view('annonceId', ['annonce' => $annonce]);
    }
    function updateAnnonce($id)
    {
        $annonce = Annonce::find($id);
        $annonce->title = request('title');
        $annonce->description = request('description');
        $annonce->price = request('price');
        $annonce->image = request('image');
        $annonce->save();
        return redirect()->to('/annonce/');
    }
}
