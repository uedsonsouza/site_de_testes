<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){

        $events= Event::all();
        return view('welcome',['events'=>$events]);
    }
    public function create(){
        return view('events.create') ;
    }
    public function store(Request $request) {

        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->date = $request->date;

        $event->save();

        return redirect('/')->with('msg', 'Evento criado com sucesso!');

    }
    public function entre (){
        return view('acessos.entre') ;
    }
    public function ocorre(){
        return view('acontecimentos.ocorre') ;
    }
    public function login(){
        return view('cadastros.login') ;
    }
}
