<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tipo_evento;

class TipoEventoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipo = Tipo_evento::all();
        return view('admin.tipoEvento.index', [

            'tipo' => $tipo

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tipoEvento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Tipo_evento $evento)
    {
        $data = $request->validate([

            'name' => 'string|required',
            'description' => 'string|required'


        ]);

Tipo_evento::create($data);

        return redirect(route('admin.tipo.index'));

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
    public function edit(Tipo_evento $id)
    {
        return view('admin.tipoEvento.edit', [
            'id' => $id, 

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tipo_evento $id)
    {
        $data = $request->validate([
            'name' => 'string|required',
            'description' => 'string|required'

        ]);

        $id->fill($data);
        $id->save();

        return redirect(route('admin.tipo.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipo = Tipo_evento::find($id);

        $tipo->delete();

        return redirect(route('admin.tipo.index'));
    }
}
