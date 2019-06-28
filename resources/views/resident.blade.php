@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">

            <section class="col-sm-3">
                <div class="hero-body">
                    <div class="">
                        <h1 class="title">
                            Residentes
                        </h1>
                        <h2 class="subtitle">
                            Configuración
                        </h2>
                    </div>
                </div>
                <div class="">
                    @include('partials.nav_residents')
                    @include('partials.nav_type_residents')
                </div>
            </section>

            <section class="col-sm-9">

                <div class="column">
                    @yield('resident', 'Contenido predeterminado para residentes')
                </div>
            </section>
        </div>
    </div>
@endsection
