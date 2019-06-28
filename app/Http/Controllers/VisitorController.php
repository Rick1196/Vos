<?php

namespace App\Http\Controllers;

use App\Visitor;
use App\TypeOfVisitor;
use App\Conveyance;
use App\Credential;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitantes = Visitor::orderBy('first_name', 'ASC')->get();
        $MyGroupBy =$visitantes->groupBy('type_visitor_id');
        return view('visitors.index', compact('MyGroupBy'));
        //return $MyGroupBy;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposDeVisitantes = TypeOfVisitor::all();
        $transportes = Conveyance::all();
        $credenciales = Credential::all();
        return view('visitors.create', compact('tiposDeVisitantes','credenciales', 'transportes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'type_visitor' => 'required|not_in:0',
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'phone' => 'required|digits_between:7,10',
            'credential' => 'required|not_in:0',
            'conveyance' => 'required|not_in:0',
        ]);

        $visitante = new Visitor;

        $visitante->first_name = request('first_name');
        $visitante->last_name = request('last_name');
        $visitante->phone = request('phone');
        $visitante->type_visitor_id= request('type_visitor');
        $visitante->credential_id = request('credential');
        $visitante->type_conveyance_id = request('conveyance');

        $visitante->save();

        return redirect()->route('visitante.indice')
            ->with('success','El elemento hacido agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show(Visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $visitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy($clave)
    {
        $visitante = Visitor::find($clave);
        $visitante->delete();
        return redirect()->route('visitante.indice')
            ->with('success','El elemento hacido eliminado exitosamente.');
    }
}
