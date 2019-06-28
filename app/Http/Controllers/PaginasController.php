<?php

namespace App\Http\Controllers;

use App\AuditCredential;
use App\AuditTipoVisitantes;
use App\AuditTransporte;
use App\AuditVisitante;
use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function auditorias(){
        $transportes = count(AuditTransporte::all());
        $credenciales = count(AuditCredential::all());
        $tipos = count(AuditTipoVisitantes::all());
        $visitante = count(AuditVisitante::all());
        return view('auditorias.tablero', compact('transportes', 'credenciales', 'tipos', 'visitante'));
    }
}
