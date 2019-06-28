@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <section class="col-sm-3">
                <div class="hero-body">
                    <div class="">
                        <h1 class="title">
                            Vigilantes
                        </h1>
                        <h2 class="subtitle">
                            Configuración
                        </h2>
                    </div>
                </div>
                <div class="">
                    @include('partials.nav_vigilantes')
                </div>
            </section>

            <section class="col-sm-9">

                <div class="column">
                    @yield('vigilantes', 'Contenido predeterminado para vigilantes')
                </div>
            </section>
        </div>
    </div>
@endsection
