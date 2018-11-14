<?php

namespace App\Http\Controllers;
Use App\Concert as Concert;
Use App\Salle as Salle;
Use App\Lieu as Lieu;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function concerts(){
        $concerts = Concert::all();
        $lieux = Lieu::all();
        $salles = Salle::all();

        return view('concerts',[
            'concerts' => $concerts,
            'salles' => $salles,
            'lieux' => $lieux,
            ]);
    }
    public function addSalle(){
        $salles = Salle::all();
        return view('addSalle',['salles' => $salles]);
    }
    public function updateSalleForm(Request $request){
        $salle = Salle::find($request->input('id'));
        return view('updateSalleForm',['salle' => $salle]);
    }

    public function updateConcertForm(Request $request){
        $concert = Concert::find($request->input('id'));
        $lieux = Lieu::all();
        $salles = Salle::all();

        return view('updateConcertForm',[
            'concert' => $concert,
            'salles' => $salles,
            'lieux' => $lieux,
            ]);
    }
}
