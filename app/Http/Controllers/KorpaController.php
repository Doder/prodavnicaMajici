<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Korpa;
use App\Proizvod;
use Auth;

class KorpaController extends Controller
{
    public function show(){
        $user_id = Auth::user()->id;
        $proizvodi = Korpa::where('user_id', $user_id)->get();
        $ukupno = 0;
        $results = array();
        foreach ($proizvodi as $p){
            $info = Proizvod::find($p->proizvod_id);
            $info->id = $p->id;
            $info->kolicina = $p->kolicina;
            $ukupno = $ukupno + ($info->cijena * $info->kolicina);
            array_push($results,$info);
        }
        return view('korpa.show', compact('results', 'ukupno'));
    }

    public function store($pid){
        $user_id = Auth::user()->id;

        $result = Korpa::where('proizvod_id', $pid)->first();
        if($result){
            $result->kolicina = request('kolicina');
            $result->save();
            return redirect('/majice');
        }

        $item = new Korpa;

        $item->user_id = $user_id;
        $item->proizvod_id = $pid;
        $item->kolicina = request('kolicina');

        $item->save();

        return redirect('/majice');
    }

    public function destroy($id){
        $item = Korpa::find($id);
        $item->delete();

        return redirect('/');
    }
}
