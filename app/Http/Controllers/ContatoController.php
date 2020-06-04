<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contatos;

class ContatoController extends Controller
{

    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required',
            'sobrenome'=>'required',
            'endereco'=>'required',
            'telefon'=>'required',
            'tipo sanguineo'=>'required']);

            $contatos = new contatos([
                'nome'=>$request->get('nome'),
                'sobrenome'=>$request->get('sobrenome'),
                'telefone'=>$request->get('telefone'),
                'tiposanguineo'=>$request->get('tiposanguineo')]);
            $contatos->save();
                return redirect('/contatos')->width('sucesso', 'registrado!');


    }
    public function create()
    {
        return view('contatos.create');
    }
    public function index()
{
    $contatos = Contatos::all();

    return view('contatos.index', compact('contatos'));
}
}
