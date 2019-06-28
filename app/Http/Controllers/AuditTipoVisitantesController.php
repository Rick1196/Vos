<?php

namespace App\Http\Controllers;

use App\AuditTipoVisitantes;
use Illuminate\Http\Request;

class AuditTipoVisitantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tipos = AuditTipoVisitantes::all();
        return view('auditorias.audit_t_visitors', compact('tipos'));
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
     * @param  \App\AuditTipoVisitantes  $auditTipoVisitantes
     * @return \Illuminate\Http\Response
     */
    public function show(AuditTipoVisitantes $auditTipoVisitantes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AuditTipoVisitantes  $auditTipoVisitantes
     * @return \Illuminate\Http\Response
     */
    public function edit(AuditTipoVisitantes $auditTipoVisitantes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AuditTipoVisitantes  $auditTipoVisitantes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuditTipoVisitantes $auditTipoVisitantes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AuditTipoVisitantes  $auditTipoVisitantes
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuditTipoVisitantes $auditTipoVisitantes)
    {
        //
    }
}
