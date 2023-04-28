<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use App\Models\Tipo_evento;



class IndexController extends Controller
{
    public function index(){
        $tipo = Tipo_evento::all();
        $produtos = Produto::all();
        $categorias = Categoria::all();
        return view('index',[
            'tipo' => $tipo,
            'produtos' => $produtos,
            'categorias' => $categorias

        ]);
    }


    public function details($id){
        $produto = Produto::find($id);

        return view('details', [

            'produto' => $produto
        ]);
    }
}
