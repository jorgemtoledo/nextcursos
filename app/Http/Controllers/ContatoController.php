<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        // return "Esse e o controllerl";
        $contatos = [(object)["nome"=>"Maria", "tel"=>"678889955"], (object)["nome"=>"Joao", "tel"=>"6799559559"]];
        
        $contato = new Contato();
        $cont = $contato->list();
        dd($cont->nome);
        
        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $req)
    {
        // dd($req->all());
        // dd($req['name']);
        return "Esse e o Criar - {$req['name']}";
    }

    public function editar()
    {
        return "Esse e o Editar";
    }


}
