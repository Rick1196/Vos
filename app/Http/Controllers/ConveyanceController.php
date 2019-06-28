<?php

namespace App\Http\Controllers;

use App\Conveyance;
use Illuminate\Http\Request;

class ConveyanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = Conveyance::orderBy('type', 'ASC')->get();
        return view('conveyances.index', compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conveyances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $conveyance = new Conveyance;

        $conveyance->type = $request->input('type');
        $conveyance->description = $request->input('description');
        $conveyance->save();
        return redirect()->route('conveyances.index')
            ->with('success','El elemento hacido agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Conveyance  $conveyance
     * @return \Illuminate\Http\Response
     */
    public function show(Conveyance $conveyance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Conveyance  $conveyance
     * @return \Illuminate\Http\Response
     */
    public function edit(Conveyance $conveyance)
    {
        return view('conveyances.edit', compact('conveyance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Conveyance  $conveyance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conveyance $conveyance)
    {
        $conveyance = Conveyance::find($conveyance->id);

        $conveyance->type = $request->type;
        $conveyance->description = $request->description;

        $conveyance->save();


        return redirect()->route('conveyances.index')
            ->with('success','El elemento hacido actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Conveyance  $conveyance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Conveyance $conveyance)
    {
        $conveyance->delete();
        return redirect()->route('conveyances.index')
            ->with('success','El elemento hacido eliminado exitosamente.');
    }
}
