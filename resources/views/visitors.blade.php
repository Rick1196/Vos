@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <section class="col-sm-3">
                <div class="hero-body">
                    <div class="">
                        <h1 class="title">
                            Visitantes
                        </h1>
                        <h2 class="subtitle">
                            Configuración
                        </h2>
                    </div>
                </div>
                <div class="">
                    @include('partials.nav_visitors')
                    @include('partials.nav_config_visitors')
                </div>
            </section>

            <section class="col-sm-9">

                <div class="column">
                    @yield('visitors', 'Contenido predeterminado para visitantes')
                </div>
            </section>
        </div>
    </div>
@endsection
