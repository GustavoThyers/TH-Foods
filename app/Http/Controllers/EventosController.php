<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Tipo_evento;
class EventosController extends Controller
{





    public function store(Request $request, Evento $evento){



        $data = $validate = $request->validate([
            'name_user' => 'required',
            'telephone_user' => 'required',
            'quantity' => 'required',
            'date_time' => 'required',
            'tipo_id' => 'required'


        ],[

            'required' => "O campo precisa ser Preenchido"
        ]);

        Evento::create($data);

        return redirect(route('site.index'));
    }   
}
