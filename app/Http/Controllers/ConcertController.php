<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConcertController extends Controller
{
    public function insertSalle(Request $request){
        $newSalle = new \App\Salle;
        $newSalle->name = $request->input('name');
        $newSalle->save();
        return redirect('/addSalle');
    }
    public function insertConcert(Request $request){
        $newConcert = new \App\Concert;
        $newConcert->name = $request->input('name');
        $newConcert->salle_id = $request->input('salle');
        $newConcert->lieu_id = $request->input('lieu');
        $newConcert->dispo = $request->input('dispo');
        $newConcert->save();
        return redirect('/concerts');
    }

    public function deleteSalle(Request $request){
        \App\Salle::destroy($request->input('id'));
        return redirect ('/addSalle');
    }

    public function deleteConcert(Request $request){
        \App\Salle::destroy($request->input('id'));
        return redirect ('/concerts');
    }

    public function updateSalle(Request $request){
        $Salle = \App\Salle::find($request->input('id'));
        $Salle->name = $request->input('name');
        $Salle->save();
        return redirect('/addSalle');
    }

    public function updateConcert(Request $request){
        $Concert = \App\Concert::find($request->input('id'));
        $Concert->name = $request->input('name');
        $Concert->salle_id = $request->input('salle');
        $Concert->lieu_id = $request->input('lieu');
        $Concert->dispo = $request->input('dispo');
        $Concert->save();
        return redirect('/concerts');
    }
}
