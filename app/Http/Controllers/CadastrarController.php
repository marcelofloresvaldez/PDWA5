<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;

class CadastrarController extends Controller
{
    //regra do negocio: validar dados
    public function salvar(Request $request){
        $request->validate([
            "titulo" => "required|min:3|max:100",
            "dataReleased" => "required|date",
            "diretor" => "required|min:10|max:100",
            "duracaoMinutos" => "required|integer",
            "estreia" => "required|boolean",
        ]);
        $filme = new Filme();
        $filme->fill($request->all());
        $filme->save();

        //dd($request);
        return view('cadastroSalvo');

    }
}
