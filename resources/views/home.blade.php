@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (Auth::user()->hasRole('user'))
                        <div class="alert alert-success" role="alert">
                            <p>Bienvenido vigilante</p>
                        </div>
                    @endif
                    @if (Auth::user()->hasRole('auditor'))
                        <div class="alert alert-success" role="alert">
                            <p>Bienvenido auditor</p>
                        </div>
                    @endif
                    @if (Auth::user()->hasRole('admin'))
                        <div class="alert alert-success" role="alert">
                            <p>Bienvenido administrador</p>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
