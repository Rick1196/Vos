<?php

namespace App\Http\Controllers;

use App\AuditCredential;
use Illuminate\Http\Request;

class AuditCredentialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $credenciales = AuditCredential::all();
        return view('auditorias.audit_credentials', compact('credenciales'));
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
     * @param  \App\AuditCredential  $auditCredential
     * @return \Illuminate\Http\Response
     */
    public function show(AuditCredential $auditCredential)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AuditCredential  $auditCredential
     * @return \Illuminate\Http\Response
     */
    public function edit(AuditCredential $auditCredential)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AuditCredential  $auditCredential
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AuditCredential $auditCredential)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AuditCredential  $auditCredential
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuditCredential $auditCredential)
    {
        //
    }
}
