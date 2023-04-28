<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evento;
use App\Models\Tipo_evento;
use Illuminate\Support\Facades\Auth;



class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();
        return view('admin.eventos.index',[
            'eventos' => $eventos,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos = Tipo_evento::all();
        return view('admin.eventos.create', [

            'tipos' => $tipos,

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Evento $id)
    {
        $data = $request->validate([
            'telephone' => 'required',
            'quantity' => 'required|integer',
            'date_time' => 'required',
            'tipo_id' => 'required|integer'


        ]);


        Evento::create([

            'name_user' => Auth::user()->name,
            'telephone_user' => $data['telephone'],
            'quantity' => $data['quantity'],
            'date_time' => $data['date_time'],
            'tipo_id' => $data['tipo_id'],
        ]);

            return redirect(route('admin.evento.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Evento $id)
    {
        $tipos = Tipo_evento::all();
        return view('admin.eventos.edit', [
            'id' => $id, 
            'tipos' => $tipos,

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evento $id)
    {
        $data = $request->validate([

            'name_user' => 'nullable|string',
            'telephone_user' => 'nullable|string',
            'quantity' => 'nullable|integer',
            'date_time' => 'nullable',
            'tipo_id' => 'nullable|integer'

        ]);

        $id->fill($data);
        $id->save();

        return redirect(route('admin.evento.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $evento = Evento::find($id);

        $evento->delete();

        return redirect(route('admin.evento.index'));
    }
}
