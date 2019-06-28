<?php

namespace App\Http\Controllers;

use App\Resident;
use App\TypeOfResident;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\DataBase\Eloquent\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;


class ResidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $residentes = Resident::paginate(5);
        return view('residents.index', compact('residentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $typeOfResidents = TypeOfResident::all();
        return view('residents.create', compact('typeOfResidents'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function familiar($clave)
    {
        $residente = Resident::find($clave);
        return view('relatives.create', compact('residente'));
    }

    /**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
    public function store(Request $request)
    {
        $residente = new Resident;
        $residente->first_name = $request->input('first_name');
        $residente->last_name = $request->input('last_name');
        $residente->phone = $request->input('phone');
        $residente->email = $request->input('email');
        $residente->type_of_resident_id = $request->input('type');
        $residente->save();
        return redirect()->route('residentes.index')
            ->with('success','El elemento se guardo correctamente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRelatives(Request $request)
    {
        $primary = Resident::find($request->input('primay_id'));
        /*$primary->relatives_id=$primary->id;
        $primary->save();*/

        $residente = new Resident;
        $residente->first_name = $request->input('first_name');
        $residente->last_name = $request->input('last_name');
        $residente->phone = $request->input('phone');
        $residente->email = $request->input('email');
        $residente->type_of_resident_id = $primary->type_of_resident_id;
        $residente->relatives_id = $primary->id;

        $residente->save();
        return redirect()->route('residentes.index')
            ->with('success','El elemento se guardo correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function show($clave)
    {
        $residente =  Resident::find($clave);
        $familiares = DB::table('residents')->where('relatives_id', '=', $residente->id)->get();
        return view('residents.show', compact('familiares', 'residente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function edit(Resident $resident)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resident $resident)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resident  $resident
     * @return \Illuminate\Http\Response
     */
    public function destroy($resident)
    {
        $residente = Resident::find($resident);
        $residente->delete();
        return redirect()->route('residentes.index')
            ->with('success','El elemento se elimino correctamente');
    }

    public function paginate($items, $perPage = 10, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

}
