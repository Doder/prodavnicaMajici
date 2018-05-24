<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        
        $naziv_slike = $request->file('slika')->getClientOriginalName();

        $majica = new Proizvod;

        $majica->naziv = request('naziv');
        $majica->opis = request('opis');
        $majica->slika = $naziv_slike;

        $request->file('slika')->storeAs('public', $naziv_slike);

        $majica->save();

        return redirect('/');
        
    }

    public function destroy($id){
        $item = Proizvod::find($id);
        $item->delete();

        return redirect('/');
    }
}
