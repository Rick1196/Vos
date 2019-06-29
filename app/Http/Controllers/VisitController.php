<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
use App\Visit;
use App\House;
use App\Vigilant;
use App\Visitor;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class VisitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $vi = Vigilant::where('usuario',$user)->first();
        $visits = DB::select("select FECHA_VISITA fecha, (R.FIRST_NAME||' ' ||R.LAST_NAME) residente, (V.FIRST_NAME||' '||V.LAST_NAME) visitante, TOV.DESCRIPTION tipo from VISITS inner join VISITORS V on VISITS.ID_VISITANTE = V.ID inner join HOUSES on VISITS.ID_CASA = HOUSES.ID inner join RESIDENTS R on HOUSES.ID_RESIDENTE = R.ID inner join TYPE_OF_VISITORS TOV on V.TYPE_VISITOR_ID = TOV.ID where VISITS.ID_VIGILANTE = ?  order by FECHA_VISITA DESC ",[$vi->id]);
        return View('visits/index',compact('visits'));
    }

    public function todas(Request $data){
        $f1 = $data['f1'];
        $f2 = $data['f2'];
        $vi = [];
        if($f1 == '' || $f2 == ''){
            $vi =  DB::connection('auditor')->select("select * from JRPALACIO.VISITAS_VIEW");
        }else{
            $vi = DB::connection('auditor')->select("select * from JRPALACIO.VISITAS_VIEW where FECHA_VISITA between TO_DATE (?, 'yyyy/mm/dd') and TO_DATE (? ,'yyyy/mm/dd')",[$f1,$f2]);
        }
        return $vi;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $visitors = Visitor::all();
        $houses = House::all();
        $vigilants = Vigilant::all();
        return view('visits.create', compact('visitors','houses', 'vigilants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $vig = Vigilant::where('usuario',$request['user'])->first();
        $vi = new Visit;
        $vi->id_vigilante = $vig->id;
        $vi->id_visitante = $request['visitor'];
        $vi->id_casa = $request['casa'];
        $vi->fecha_visita = Carbon::now();
        $vi->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
