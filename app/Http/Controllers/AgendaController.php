<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Agenda;

class AgendaController extends Controller
{
    public function lista(){

        $registros = Agenda::all();

        return view('admin.index', compact('registros'));
    }

    public function adicionar(Request $req) {

        $dados= $req->all();

        Agenda::create($dados);

        return redirect()->route('site.home');
    
    }

    public function alterar(Request $req){

        $dados = $req->all();

        $id = $dados['id'];

        Agenda::find($id)->update($dados);

        return redirect()->route('site.home');

    }

    public function deletar(Request $req){

        $id = $req['id'];

        Agenda::find($id)->delete();

        return redirect()->route('site.home');
    }
}
