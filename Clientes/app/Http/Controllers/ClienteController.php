<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Redirect;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $clientes = Cliente::all();
        return view('Cliente.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Cliente.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      Cliente::create($request->all());
      return redirect(route('Cliente.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
      
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       


    }
}
