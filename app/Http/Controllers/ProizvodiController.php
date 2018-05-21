<?php

namespace App\Http\Controllers;

use App\Proizvod;

class ProizvodiController extends Controller
{
    public function index(){
        $majice = Proizvod::all();
        return view('index', compact('majice'));
    }

    public function show($id){
        $majica = Proizvod::find($id);
        return view('majica_info', compact('majica'));
    }
}
