<?php

namespace App\Http\Controllers;

use App\Condominium;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\House;
use App\Resident;
use App\ArrendatedHouse;
class CondominiumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $condominios =DB::table('condominia')->paginate(5);
        return view('condominiums.index', compact('condominios'));
    }

    public function houses(Condominium $condominium){
        $casas = House::where('id_condominio',$condominium->id)->paginate(5);
        return view('condominiums.houses', compact('casas'));
    }

    public function arrending(House $house){
        return view('condominiums.arrending', compact('house'));
    }

    public function searchOwner(Request $request)
    {
        $first = $request['first'];
        $last = $request['last'];
        $residents = [];
        if($first != '' && $last != ''){
            $residents = Resident::where('first_name','LIKE','%'.$first.'%')->orWhere('last_name','LIKE','%'.$last.'%')->get();
        }else{
            if($first != '' && $last == ''){
                $residents = Resident::where('first_name','LIKE','%'.$first.'%')->get();
            }else{
                $residents = Resident::where('last_name','LIKE','%'.$last.'%')->get();
            }
        }
        return $residents;
        
    }

    public function selectOwner(Request $request)
    {
        $house = House::find($request['house']);
        $house->id_residente = $request['resident'];
        $house->habitantes = $request['habs'];
        $house->save();
        $arr = new ArrendatedHouse;
        $arr->habitantes = $request['habs'];
        $arr->id_house = $request['house'];
        $arr->save();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('condominiums.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $condominio = new Condominium;

        $condominio->name =  $request->input('name');
        $condominio->num_rented_houses = $request->input('number');
        $condominio->phone = $request->input('phone');
        $condominio->address = $request->input('address');
        $condominio->postal = $request->input('postal');

        $condominio->save();

        return redirect()->route('condominium.index')
            ->with('success','El elemento hacido agregado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Condominium  $condominium
     * @return \Illuminate\Http\Response
     */
    public function show(Condominium $condominium)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Condominium  $condominium
     * @return \Illuminate\Http\Response
     */
    public function edit(Condominium $condominium)
    {
        return view('condominiums.edit', compact('condominium'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Condominium  $condominium
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Condominium $condominium)
    {
        $condominio = Condominium::find($condominium->id);

        $condominio->name =  $request->name;
        $condominio->num_rented_houses = $request->number;
        $condominio->phone = $request->phone;
        $condominio->address = $request->address;
        $condominio->postal = $request->postal;

        $condominio->save();


        return redirect()->route('condominium.index')
            ->with('success','El elemento hacido actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Condominium  $condominium
     * @return \Illuminate\Http\Response
     */
    public function destroy(Condominium $condominium)
    {
        Condominium::destroy($condominium->id);
        return redirect()->route('condominium.index')->with('success','Condominio eliminado exitosamente');
    }
}
