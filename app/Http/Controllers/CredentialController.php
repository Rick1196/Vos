<?php

namespace App\Http\Controllers;

use App\Credential;
use Illuminate\Http\Request;

class CredentialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $type = Credential::orderBy('type', 'ASC')->get();
        return view('credentials.index', compact('type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('credentials.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $credential = new Credential;

        $credential->type = $request->input('type');
        $credential->description = $request->input('description');
        $credential->save();
        return redirect()->route('credentials.index')
            ->with('success','El elemento hacido agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function show(Credential $credential)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function edit(Credential $credential)
    {
        return view('credentials.edit', compact('credential'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Credential $credential)
    {
        $credential = Credential::find($credential->id);

        $credential->type = $request->type;
        $credential->description = $request->description;

        $credential->save();


        return redirect()->route('credentials.index')
            ->with('success','El elemento hacido actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Credential  $credential
     * @return \Illuminate\Http\Response
     */
    public function destroy(Credential $credential)
    {
        $credential->delete();
        return redirect()->route('credentials.index')
            ->with('success','El elemento hacido eliminado exitosamente.');
    }
}
