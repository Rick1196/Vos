<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Condominium;
use App\Vigilant;
use Illuminate\Http\Request;

class VigilantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //latest: ultimo :: orden descendente
        $vigilantes =  Vigilant::latest()->paginate(8);
        return view('vigilantes.index',compact('vigilantes'))
            ->with('i', (request()->input('page', 1) - 1) * 8);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $condominiums = Condominium::all();
        return view('vigilantes.create', compact('condominiums'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|digits_between:7,10',
            'condominium' => 'required|not_in:0',
        ]);

        $vigilant = new Vigilant;

        $vigilant->first_name =  request('first_name');
        $vigilant->last_name = request('last_name');
        $vigilant->phone = request('phone');
        $vigilant->condominium_id = request('condominium');

        $vigilant->save();

        return redirect()->route('vigilantes.index')
            ->with('success','El elemento agregado exitosamente.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vigilant  $vigilant
     * @return \Illuminate\Http\Response
     */
    public function edit($vigilante)
    {
        $vigilante =  Vigilant::find($vigilante);
        return view('vigilantes.edit', compact('vigilante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vigilant  $vigilant
     * @return \Illuminate\Http\Response
     */
    public function update($vigilante)
    {
        request()->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|digits_between:7,10',
        ]);

        $vigilant =  Vigilant::find($vigilante);

        $vigilant->first_name = request('first_name');
        $vigilant->last_name = request('last_name');
        $vigilant->phone =  request('phone');

        $vigilant->save();

        return redirect()->route('vigilantes.index')
            ->with('success','El elemento hacido actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vigilant  $vigilant
     * @return \Illuminate\Http\Response
     */
    public function destroy($vigilante)
    {
        $vigilant =  Vigilant::find($vigilante);
        $vigilant->delete();
        return redirect()->route('vigilantes.index')
            ->with('success','El elemento hacido eliminado exitosamente.');
    }
}
