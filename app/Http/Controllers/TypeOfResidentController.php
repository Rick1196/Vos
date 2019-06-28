<?php

namespace App\Http\Controllers;

use App\TypeOfResident;
use Dotenv\Validator;
use Illuminate\Http\Request;

class TypeOfResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = TypeOfResident::all();
        return view('type_residents.index', compact('tipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('type_residents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string',
            'description' => 'required|string',
        ]);

        $tipo = new TypeOfResident;

        $tipo->type = $request->input('type');
        $tipo->description = $request->input('description');

        $tipo->save();

        return redirect()->route('tipos_de_residentes.index')
            ->with('success','Se agrego correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeOfResident  $typeOfResident
     * @return \Illuminate\Http\Response
     */
    public function show(TypeOfResident $typeOfResident)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeOfResident  $typeOfResident
     * @return \Illuminate\Http\Response
     */
    public function edit($typeOfResident)
    {
        $typeOfResident = TypeOfResident::find($typeOfResident);
        return view('type_residents.edit', compact('typeOfResident'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeOfResident  $typeOfResident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $typeOfResident)
    {
        $request->validate([
            'type' => 'required|string',
            'description' => 'required|string',
        ]);

        $tipo = TypeOfResident::find($typeOfResident);

        $tipo->type = $request->input('type');
        $tipo->description = $request->input('description');

        $tipo->save();

        return redirect()->route('tipos_de_residentes.index')
            ->with('success','Se agrego correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeOfResident  $typeOfResident
     * @return \Illuminate\Http\Response
     */
    public function destroy($typeOfResident)
    {
        $typeOfResident = TypeOfResident::find($typeOfResident);
        $typeOfResident->delete();
        return redirect()->route('tipos_de_residentes.index')
            ->with('success','El elemento hacido eliminado exitosamente.');
    }
}
