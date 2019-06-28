@extends('auditoria')

@section('auditoria')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            

            <section>

                <table class="table is-fullwidth">
                    <thead>
                    <tr>
                        <th>Descripción</th>
                        <th>Nombre de la tabla</th>
                        <th>Operación</th>
                        <th>Movimientos</th>
                        <th>Historial</th>
                    </thead>

                    <tbody>
                        <tr>
                            <td>Medios de transportes</td>
                            <td>conveyances</td>
                            <td>trigger</td>
                            <td>{{ $transportes }}</td>
                            <td><a href="{{ route('audit_conveyances') }}" class="btn btn-primary">Ver</a></td>
                        </tr>
                        <tr>
                            <td>Credenciales</td>
                            <td>credentials</td>
                            <td>trigger</td>
                            <td>{{ $credenciales }}</td>
                            <td><a href="{{ route('audit_credentials') }}" class="btn btn-primary">Ver</a></td>
                        </tr>
                        <tr>
                            <td>Tipos de visitantes</td>
                            <td>type_of_visitors</td>
                            <td>sequence</td>
                            <td>{{ $tipos }}</td>
                            <td><a href="{{ route('audit_tvisitors') }}" class="btn btn-primary">Ver</a></td>
                        </tr>
                        <tr>
                            <td>Visitante</td>
                            <td>type_of_visitors</td>
                            <td>sequence</td>
                            <td>{{ $visitante }}</td>
                            <td><a href="{{ route('audit_visitante') }}" class="btn btn-primary">Ver</a></td>
                        </tr>
                    </tbody>
                </table>
            </section>

        </div>
    </div>
</div>
@endsection
