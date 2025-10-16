<?php

namespace App\Http\Controllers\Notas;

use App\Models\Notas;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

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
}
