<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Event;

class VetController extends Controller
{
    
    public function index(){

        return view('home');
    }


    public function cadastro(){
        return view('events.cadastro');
    }

    public function pesquisa(){
        $events = Event::all();
        return view('pesquisa', ['events' => $events]);
    }

    public function store(Request $request){

        $event = new Event;

        $event ->nome = $request->nome;
        $event ->email = $request->email;
        $event ->especialidade = $request->especialidade;

        $event-> save();

        return redirect ('/');

    }
}
