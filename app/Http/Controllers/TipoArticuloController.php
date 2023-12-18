<?php

namespace App\Http\Controllers;

use App\Models\TipoArticulo;
use Illuminate\Http\Request;

/**
 * Class TipoArticuloController
 * @package App\Http\Controllers
 */
class TipoArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipoArticulos = TipoArticulo::paginate();

        return view('tipo_articulo.index', compact('tipoArticulos'))
            ->with('i', (request()->input('page', 1) - 1) * $tipoArticulos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipoArticulo = new TipoArticulo();
        return view('tipo_articulo.create', compact('tipoArticulo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(TipoArticulo::$rules);

        $tipoArticulo = TipoArticulo::create($request->all());

        return redirect()->route('tipo_articulos.index')
            ->with('success', 'TipoArticulo created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoArticulo = TipoArticulo::find($id);

        return view('tipo_articulo.show', compact('tipoArticulo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoArticulo = TipoArticulo::find($id);

        return view('tipo_articulo.edit', compact('tipoArticulo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  TipoArticulo $tipoArticulo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoArticulo $tipoArticulo)
    {
        request()->validate(TipoArticulo::$rules);

        $tipoArticulo->update($request->all());

        return redirect()->route('tipo_articulos.index')
            ->with('success', 'TipoArticulo updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $tipoArticulo = TipoArticulo::find($id)->delete();

        return redirect()->route('tipo_articulos.index')
            ->with('success', 'TipoArticulo deleted successfully');
    }
}
