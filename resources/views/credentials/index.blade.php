@extends('visitors')
@section('visitors')
<section>
    <header class="section">
        <h1 class="title">
            Tipos de credenciales
        </h1>
        <h2 class="subtitle">
            ¿Qué tipos de credenciales se permitirán para poder acceder a la privada?
        </h2>
        <p>
            Este documento o identificación es importantes para confirmar la identidad de la
            persona, grupo de personas o servicios que pretenden acceder a la privada.
        </p>
        <p>Aquí <strong>se listarán las credenciales permitidas.</strong></p>
        <a class="button is-warning" href="{{ route('credentials.create') }}">Agrega nuevo tipo</a>
    </header>
    @if (count($type)==0)
        <div class="notification is-danger">
            <button class="delete"></button>
            Por el momento no hay registros
        </div>
    @else
        <table class="table">
            <thead>
            <tr>
                <th>Tipo</th>
                <th>Descripcion</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($type as $item)
                <tr>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->description }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('credentials.edit',$item->id) }}"><i class="fas fa-edit"></i></a>
                    </td>
                    <td>
                        <form action="{{ route('credentials.destroy',$item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</section>
@endsection
