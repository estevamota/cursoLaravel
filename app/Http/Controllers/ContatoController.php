<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contato;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object)["nome"=>"Maria","tel"=>"123345123"],
            (object)["nome"=>"Jose","tel"=>"311321312"]
        ];

        $contato = new Contato();
        $con = $contato->lista();
        dd($con->nome);

        return view('contato.index',compact('contatos'));
    }

    public function criar(Request $req)
    {
        //dd($req['nome']);
        dd($req->all());
        return "Esse é o Criar do ContatoController";
    }

    public function editar(Request $req)
    {
       // dd($req);
        return "Esse é o Editar do ContatoController";
    }
}
