<?php

namespace App\Http\Controllers\Notas;

use App\Models\Notas;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\View;


class NotasController extends Controller
{
    public function index(Request $request)
    {
        $notas = Notas::get();

        return view('Notas.index', compact('notas'));
    }

    public function create()
    {
        return view('Notas.create');
    }

    public function store(Request $request) {

        $notas = Notas::create($request->all());

        return Redirect::to('/Notas/index');
    }

    public function edit($id) {

        $notas = Notas::find($id);

        return View::make('Notas.edit', compact('notas'));
    }

    public function update(Request $request, Notas $notas) {

        $notas->update($request->all());

        return Redirect::to('/Notas/index');
    }

    public function delete($id) {

        $notas = Notas::find($id);

        return View::make('Notas.delete', compact('notas'));
    }

    public function destroy(Notas $notas) {

        $notas->delete();

        return Redirect::to('/Notas/index');
    }

    public function ver($id){

        $notas = Notas::findOrFail($id);

        return view('Notas.ver', compact('notas'));
    }

}
