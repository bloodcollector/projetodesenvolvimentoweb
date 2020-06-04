<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class indexController extends Controller
{

public function index()
{
    $contatos = Contatos::all();

    return view('contatos.index', compact('contatos'));
}
}
