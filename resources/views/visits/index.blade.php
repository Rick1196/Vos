@extends('visits')
@section('visits')
    <section>
        <header class="section">
            <h1 class="title">
                Visitantes
            </h1>
            <h2 class="subtitle">
                Visitas realizadas al interior
            </h2>

        </header>
        @if (count($visits)==0)
            <article class="message is-danger">
                <div class="message-body">
                    <p>No hay visitas registradas</p>
                </div>
            </article>
        @else
            <table class="table is-fullwidth">
                <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Visitante</th>
                    <th>Visita a:</th>
                    <th>Fecha </th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($visits as $v)
                        <tr>
                        <td>{{$v->tipo}}</td>
                        <td>{{$v->visitante}}</td>
                        <td>{{$v->residente}}</td>
                        <td>{{$v->fecha}}</td>
                        </tr>
                    @endforeach
                    <tr>

                    </tr>
                </tbody>

            </table>

        @endif
    </section>
@endsection
