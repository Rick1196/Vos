<?php

namespace App\Http\Controllers;

use App\AuditVisitante;
use Illuminate\Http\Request;
use function Sodium\compare;

class AuditVisitanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitantes = AuditVisitante::all();
        return view('auditorias.audit_visitors', compact('visitantes'));
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
     * @param  \App\AuditVisitante  $auditVisitante
     * @return \Illuminate\Http\Response
     */
    public function show(AuditVisitante $auditVisitante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AuditVisitante  $auditVisitante
     * @return \Illuminate\Http\Response
     */
    public function edit(AuditVisitante $auditVisitante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AuditVisitante  $auditVisitante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuditVisitante $auditVisitante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AuditVisitante  $auditVisitante
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuditVisitante $auditVisitante)
    {
        //
    }
}
