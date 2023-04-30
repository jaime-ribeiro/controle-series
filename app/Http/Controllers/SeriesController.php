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

        //A função acima é igual a de baixo
        return view('listar-series', compact('series'));
    }
}
