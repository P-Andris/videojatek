<?php

namespace App\Http\Controllers;

use App\Models\Jatek;
use Illuminate\Http\Request;

class JatekController extends Controller
{
    // GET:
    public function index() {
        $jatekok = response()->json(Jatek::all());
        return $jatekok;
    }

    public function show($id) {
        $jatekok = response()->json(Jatek::find($id));
        return $jatekok;
    }

    // DELETE:
    public function destroy($id) {
        Jatek::find($id)->delete();
    }

    // POST:
    public function store(Request $request) {
        $jatek = new Jatek();
        $jatek->nev = $request->nev;
        $jatek->platform = $request->platform;
        $jatek->darabszam = $request->darabszam;
        $jatek->ar = $request->ar;
        $jatek->save();
    }
    
    // PUT:
    public function update(Request $request, $id) {
        $jatek = Jatek::find($id);
        $jatek->nev = $request->nev;
        $jatek->platform = $request->platform;
        $jatek->darabszam = $request->darabszam;
        $jatek->ar = $request->ar;
        $jatek->save();
    }


    // VIEW:
    // listView:
    public function listView() {
        $jatekok = Jatek::all();
        return view('jatek.list', ['jatekok' => $jatekok]);
    }
}
