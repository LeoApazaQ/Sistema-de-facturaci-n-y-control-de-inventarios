<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\Proveedor;
use App\Models\Proveedore;
use App\Models\Tipo_Documento;
use App\Models\TipoDocumento;
use Illuminate\Http\Request;

/**
 * Class ProveedoreController
 * @package App\Http\Controllers
 */
class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $busqueda = $request->busqueda;

        $proveedores = Proveedore::where('documento','LIKE','%'.$busqueda.'%')
                            ->orwhere('nombre','LIKE','%'.$busqueda.'%')
                            ->orwhere('apellido','LIKE','%'.$busqueda.'%')
                            ->latest('id')
                            ->paginate();

        //$proveedores->load('ciudad', 'tipoDocumento');

        //$proveedores = Proveedor::find(1);

        return view('proveedore.index', compact('proveedores'))
            ->with('i', (request()->input('page', 1) - 1) * $proveedores->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $proveedore = new Proveedore();
        $ciudades = Ciudad::all();
        $documentos = TipoDocumento::all();

        return view('proveedore.create', compact('proveedore', 'ciudades', 'documentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Proveedore::$rules);

        $proveedore = Proveedore::create($request->all());

        return redirect()->route('proveedores.index')
            ->with('success', 'Proveedor creado con exito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proveedore = Proveedore::find($id); 
        
        return view('proveedore.show', compact('proveedore'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedore = Proveedore::find($id);
        $ciudades = Ciudad::all();
        $documentos = TipoDocumento::all();        

        return view('proveedore.edit', compact('proveedore', 'ciudades', 'documentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Proveedore $proveedore
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proveedore $proveedore)
    {
        request()->validate(Proveedore::$rules);

        $proveedore->update($request->all());

        return redirect()->route('proveedores.index')
            ->with('success', 'Proveedore updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $proveedore = Proveedore::find($id)->delete();

        return redirect()->route('proveedores.index')
            ->with('success', 'Proveedore deleted successfully');
    }
}
