<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Filme;


class XmlController extends Controller
{
    //pegar todos os dados e gerar um xml 
    public function gerarXML(){
        //buscar dados do BD
        $dados = Filme::all(); //select * from tabela
       // print_r($dados);

        //retornan a view  com os dados
        return response()->view('data-xml',['registros' => $dados])->header('Content-Type', 'application/xml');
    }
}
