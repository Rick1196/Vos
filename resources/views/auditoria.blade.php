@extends('layouts.app')
@section('content')
    <div class="container">
        <section class="col">
            <div class="hero-body">
                <div class="">
                    <h1 class="title">
                        Auditorias
                    </h1>
                    <h2 class="subtitle">
                        Secuencias, disparadores
                    </h2>
                </div>
            </div>
            <div class="hero-footer">
                @if(!request()->is('auditorias'))
                    <a href="{{ route('auditorias') }}" class="btn btn-success">Regresar</a>
                @endif
            </div>
        </section>
        <section class="col-sm-9">
            <div class="column">
                @yield('auditoria', 'Contenido predeterminado para auditorias')
            </div>
        </section>
    </div>
@endsection
