<?php

namespace App\Http\Controllers;

use App\Models\Gasto;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function Laravel\Prompts\error;

class GastoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gastos = Gasto::orderBy('data', 'desc')->get();
        return view('home', compact('gastos'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('gastos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'descricao' => 'required',
            'valor' => 'required|numeric',
            'data' => 'required|date',
            'categoria' => 'required'
        ]);

        try {
            Gasto::create($request->all());
            return redirect()->route('home')->with('success', 'Gasto Cadastrado');
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
    }




    /**
     * Display the specified resource.
     */
    public function show(Gasto $gasto)
    {
        //


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        if (!$gasto = Gasto::find($id)) {
            return redirect()->route('gasto.index');
        }

        return view('gastos.edit', compact('gasto'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gasto $gasto)
{
    $request->validate([
        'descricao' => 'required',
        'valor' => 'required|numeric',
        'data' => 'required|date',
        'categoria' => 'required',
    ]);

    $gasto->update($request->all());

    return redirect()->route('gasto.index')->with('success', 'Gasto atualizado com sucesso!');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gasto $gasto)
    {
        //
        $gasto = Gasto::findOrFail($gasto->id);
        $gasto->delete();

        return redirect()->route('gastos.index')->with('success', 'Gasto Deletado com Sucesso!');
    }
}
