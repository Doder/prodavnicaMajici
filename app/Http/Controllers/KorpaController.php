<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Korpa;
use App\KorpaProizvodi;
use App\Proizvod;
use Auth;

class KorpaController extends Controller
{
    public function show(){
        
        $ki = Korpa::where('user_id', Auth::user()->id)->first();
        if(!$ki){
            $results = array();
            $ukupno = 0;
            return view('korpa.show', compact('results', 'ukupno'));
        }else{
            $ki = $ki->id;
        }
        $proizvodi = KorpaProizvodi::where('korpa_id', $ki)->get();
        $ukupno = 0;
        $results = array();
        foreach ($proizvodi as $p){
            $info = Proizvod::find($p->proizvod_id);
            $ukupno = $ukupno + $info->cijena;
            array_push($results,$info);
        }
        return view('korpa.show', compact('results', 'ukupno'));
    }

    public function create($id){
        $user_id = Auth::user()->id;
        $exists = Korpa::where('user_id', $user_id)->count();
        if(!$exists){
            $korpa = new Korpa;
            $korpa->user_id = $user_id;
            $korpa->save();
        }

        $korpa = Korpa::where('user_id', $user_id)->first();
        
        $kp = new KorpaProizvodi;
        $kp->proizvod_id = $id;
        $kp->korpa_id = $korpa->id;
        $kp->kolicina = 1;
        $kp->save();


        return redirect('/');
    }
}
