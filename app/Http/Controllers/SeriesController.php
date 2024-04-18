<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Serie; // Importe a classe Serie

class SeriesController extends Controller
{
    public function index()
    {
        $series = DB::select('SELECT nome FROM series ORDER BY nome;');
        return view('series.index', ['series' => $series]);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/series/');
    }
}
