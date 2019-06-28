@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <section class="col-sm-12">
                <h1 class="title">
                    Codominio
                </h1>
                <div class="column">
                    @yield('condominium', 'Contenido predeterminado para visitantes')
                </div>
            </section>
        </div>
    </div>
@endsection
