<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class EventController extends Controller
{
    public function index(){

            $contacts = contact::all();

        return view('index', ['contacts' => $contacts]);
    }

    public function newContact(){
        return view('newContact');
    }

    public function store(Request $request){
        $contact = new contact;

        $contact->id = $request->id;
        $contact->nome = $request->nome;
        $contact->tel = $request->tel;
        $contact->email = $request->email;

        $contact->save();

        return redirect('/');
    }

    public function details(){

        
        return view('/details');
    }
}
