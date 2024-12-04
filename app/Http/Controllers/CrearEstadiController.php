<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrearEstadiController extends Controller
{
    public function crear() {
        return view('crear-estadi');
    }
}
