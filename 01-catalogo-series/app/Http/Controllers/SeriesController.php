<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Ozark',
            'Vikings',
            'Ricky And Morty',
        ];

        return view('listar-series')->with('series', $series);
    }
}