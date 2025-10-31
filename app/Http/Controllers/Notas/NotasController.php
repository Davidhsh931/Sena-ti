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

        return view::make('notas.index', compact('notas'));
    }

    public function create()
    {
        return view('notas.create');
    }

    public function store(Request $request) {

        $notas = Notas::create($request->all());

        return Redirect::to('/notas/index');
    }

    public function edit($id) {

        $notas = Notas::find($id);

        return View::make('notas.edit', compact('notas'));
    }

    public function update(Request $request, $notas) {

        $notas->update($request->all());

        return Redirect::to('/notas/index');
    }

    public function delete($id) {

        $notas = Notas::find($id);

        return View::make('notas.delete', compact('notas'));
    }

    public function destroy($notas) {

        $notas->delete();

        return Redirect::to('/notas/index');
    }

    public function ver($id){

        $notas = Notas::findOrFail($id);

        return view('notas.ver', compact('notas'));
    }

}
