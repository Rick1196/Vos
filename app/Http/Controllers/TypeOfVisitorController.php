<?php

namespace App\Http\Controllers;

use App\TypeOfVisitor;
use Illuminate\Http\Request;

class TypeOfVisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = TypeOfVisitor::orderBy('type', 'ASC')->get();
        return view('type_visitors.index', compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('type_visitors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $typeVisitor = new TypeOfVisitor;

        $typeVisitor->type = $request->input('type');
        $typeVisitor->description = $request->input('description');
        $typeVisitor->save();
        return redirect()->route('type_of_visitors.index')
            ->with('success','El elemento hacido agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TypeOfVisitor  $typeOfVisitor
     * @return \Illuminate\Http\Response
     */
    public function show(TypeOfVisitor $typeOfVisitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TypeOfVisitor  $typeOfVisitor
     * @return \Illuminate\Http\Response
     */
    public function edit(TypeOfVisitor $typeOfVisitor)
    {
        return view('type_visitors.edit', compact('typeOfVisitor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TypeOfVisitor  $typeOfVisitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TypeOfVisitor $typeOfVisitor)
    {
        $visitor = TypeOfVisitor::find($typeOfVisitor->id);

        $visitor->type = $request->type;
        $visitor->description = $request->description;

        $visitor->save();


        return redirect()->route('type_of_visitors.index')
            ->with('success','El elemento hacido actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TypeOfVisitor  $typeOfVisitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(TypeOfVisitor $typeOfVisitor)
    {
        $typeOfVisitor->delete();
        return redirect()->route('type_of_visitors.index')
            ->with('success','El elemento hacido eliminado exitosamente.');
    }
}
