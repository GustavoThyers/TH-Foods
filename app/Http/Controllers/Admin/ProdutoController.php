<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;
use Illuminate\Support\Facades\Storage;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('admin.produtos.index', [
            'produtos' => $produtos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = Categoria::all();
        return view('admin.produtos.create', [
            'categorias' => $categorias,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Produto $produtos)
    {
       $data = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|file',
            'price' => 'required',
            'categoria_id' => 'required'
        ]);

       if(!empty($data['image']) && $data['image']->isValid()){
        $file = $data['image'];
        $path = $file->store('produtos');
        $data['image'] = $path;
       }
      

        Produto::create($data);

        return redirect(route('admin.produto.index'));
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
    public function edit(Produto $id)
    {
        $categorias = Categoria::all();
        return view('admin.produtos.edit', [
            'id' => $id, 
            'categorias' => $categorias         

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produto $id)
    {
    
        $data = $request->validate([
            'name' => 'nullable|string',
            'description' => 'nullable|string',
            'price' => 'nullable',
            'image' => 'file|nullable',
            'categoria_id' => 'nullable',

        ]);


        if(!empty($data['image']) && $data['image']->isValid()){
            $file = $data['image'];
            $path = $file->store('produtos');
            $data['image'] = $path;
       }

       $id->fill($data);
       $id->save();

        return redirect(route('admin.produto.index'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
 
    */
    public function destroy($id)
    {
        $produto = Produto::find($id);

        $produto->delete();

        return redirect(route('admin.produto.index'));
    }
}