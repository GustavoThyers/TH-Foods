<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Evento;
use App\Models\User;
use App\Models\Produto;
use Illuminate\Support\Facades\Auth;
use DB;


class AdminController extends Controller
{
    public function index()
    {
        $pedidosPorMes = Pedido::select(DB::raw('MONTH(created_at) as numero_mes'), DB::raw('COUNT(*) as total'))
                    ->groupBy('numero_mes')
                    ->get();


        foreach ($pedidosPorMes as $pedido) {
            $mes[] = $pedido->numero_mes;
            $total[] = $pedido->total;
            
        }
        

        $Numeromes = implode(',', $mes);
        $PedidoNoMes = implode(',', $total);



$tipoDeEvento = Evento::select(DB::raw('(tipo_id) as tipo'), DB::raw('COUNT(*) as total'))
                    ->groupBy('tipo')
                    ->get();


           


     foreach ($tipoDeEvento as $tipo) {
            $tipos[] = $tipo->tipo;
            $totalTipo[] = $tipo->total;
                
        }


        

        $tipo = implode(',', $tipos);
        $TotalDeEventos = implode(',', $totalTipo);

        
        $name = Auth::user()->name;

        $produtos = Produto::count();
        $eventos = Evento::count();
        $users = User::count();
        $pedidos = Pedido::count();

        return view('admin.index',[
            'name' => $name,
            'produtos' => $produtos,
            'eventos' => $eventos,
            'users' => $users,
            'pedidos' => $pedidos,
            'Numeromes' => $Numeromes,
            'pedidos2' => $PedidoNoMes,
            'total' => $TotalDeEventos,
            'tipo' => $tipo,


        ]);
    }
}
