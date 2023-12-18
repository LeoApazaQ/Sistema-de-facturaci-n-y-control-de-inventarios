<?php

namespace App\Http\Controllers;

use App\Models\FormaPago;
use Illuminate\Http\Request;

/**
 * Class FormaPagoController
 * @package App\Http\Controllers
 */
class FormaPagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formaPagos = FormaPago::paginate();

        return view('forma_pago.index', compact('formaPagos'))
            ->with('i', (request()->input('page', 1) - 1) * $formaPagos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formaPago = new FormaPago();
        return view('forma_pago.create', compact('formaPago'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(FormaPago::$rules);

        $formaPago = FormaPago::create($request->all());

        return redirect()->route('forma_pagos.index')
            ->with('success', 'FormaPago created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formaPago = FormaPago::find($id);

        return view('forma_pago.show', compact('formaPago'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $formaPago = FormaPago::find($id);

        return view('forma_pago.edit', compact('formaPago'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  FormaPago $formaPago
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormaPago $formaPago)
    {
        request()->validate(FormaPago::$rules);

        $formaPago->update($request->all());

        return redirect()->route('forma_pagos.index')
            ->with('success', 'FormaPago updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $formaPago = FormaPago::find($id)->delete();

        return redirect()->route('forma_pagos.index')
            ->with('success', 'FormaPago deleted successfully');
    }
}
