<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Proizvod;

class ProizvodiController extends Controller
{
    public function index(){
        $majice = Proizvod::all();
        return view('majica.index', compact('majice'));
    }

    public function show($id){
        $majica = Proizvod::find($id);
        return view('majica.info', compact('majica'));
    }

    public function create(){
        return view('majica.create');
    }

    public function store(Request $request){
        //dd($request->file('slika')->getClientOriginalName());

        $naziv_slike = $request->file('slika')->getClientOriginalName();
        $majica = new Proizvod;

        $majica->naziv = request('naziv');
        $majica->opis = request('opis');
        $majica->slika = request('slika');

        $request->file('slika')->storeAs('img', $naziv_slike);

        $majica->save();

        return redirect('/');
        
    }
}
