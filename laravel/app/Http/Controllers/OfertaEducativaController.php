<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfertaEducativaController extends Controller
{
    public function home()
    {
        return view('oferta_educativa.home');
    }

    public function preescolar()
    {
        return view('oferta_educativa.preescolar');
    }
}
