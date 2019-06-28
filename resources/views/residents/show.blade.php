@extends('resident')
@section('resident')
    <section>

        @if (count($familiares)==0)
            <div class="alert alert-success" role="alert">
                <h3 class="alert-heading">Hola {{ $residente->first_name }}</h3>
                <hr>
                <p class="mb-0">
                    Eres el unico habitante en la casa.
                </p>
            </div>
        @else
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Hola {{ $residente->first_name }}</h4>
                <hr>
                <p class="mb-0">
                    Esta es una lista de los integrantes de tu grupo hogar.
                </p>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo electrónico</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($familiares as $familiar)

                        <tr>
                            <td>{{ $familiar->first_name }}</td>
                            <td>{{ $familiar->last_name }}</td>
                            <td>{{ $familiar->email }}</td>
                        </tr>
                @endforeach
                </tbody>
            </table>
        @endif
            <a class="button is-primary is-inverted" href="{{ route('residentes.index') }}">
                Regresar
            </a>
            <a class="btn btn-success" href="{{ route('familiar',$residente->id) }}">
                Agregar un familiar
            </a>
    </section>
@endsection
