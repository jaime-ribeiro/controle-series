<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Punisher',
            'Lost',
            'Grey\'s Anatomy',
        ];

        /* return view('listar-series', [
        'series' => $series,
        ]); */

        /* return view('listar-series', compact('series')); */
        //As funções acima são iguais a de baixo

        return view('listar-series')
            ->with('series.index', $series);

    }
    //para serpar diretórios ao invés de ser usado "/", é usado ".", por isso fica series.index
}
