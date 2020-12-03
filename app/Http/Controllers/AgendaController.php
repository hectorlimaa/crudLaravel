<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Agenda;

class AgendaController extends Controller
{
    public function index(){

        $registros = Agenda::all();

        return view('admin.index', compact('registros'));
    }

    public function adicionar(Request $req) {

        $dados= $req->all();

        Agenda::create($dados);

        return redirect()->route('site.home');

        


    }
}
