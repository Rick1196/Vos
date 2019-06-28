<?php

namespace App\Http\Controllers;

use App\AuditTransporte;
use Illuminate\Http\Request;

class AuditTransporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movimientos = AuditTransporte::all();
        return view('auditorias.audit_conveyances', compact('movimientos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AuditTransporte  $auditTransporte
     * @return \Illuminate\Http\Response
     */
    public function show(AuditTransporte $auditTransporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AuditTransporte  $auditTransporte
     * @return \Illuminate\Http\Response
     */
    public function edit(AuditTransporte $auditTransporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AuditTransporte  $auditTransporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuditTransporte $auditTransporte)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AuditTransporte  $auditTransporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuditTransporte $auditTransporte)
    {
        //
    }
}
