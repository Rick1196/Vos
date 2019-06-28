@extends('visitors')
@section('visitors')

    <section>
        <header class="section">
            <h1 class="title">
                Tipos de visitantes
            </h1>
            <h2 class="subtitle">
                ¿Quienes pueden realizar visitas al interior de la privada?
            </h2>
            <p>
                Para identificar y registrar datos del tipo de personas o servicios que pueden ingresar al interior de la privada
                debemos de contestar la pregunta anterior. Ejemplos:<strong>(Servicios, Familiares, Dominos Pizza, Carniceria la Ascienda, etc)</strong>.
            </p>
            <a class="button is-warning" href="{{ route('type_of_visitors.create') }}">Agrega nuevo tipo</a>
        </header>
        @if (count($type)==0)
            <div class="notification is-danger">
                <button class="delete"></button>
                Por el momento no tenemos registrado ningun tipo de visitante en el sistema
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
                            <a class="btn btn-primary" href="{{ route('type_of_visitors.edit',$item->id) }}"><i class="fas fa-edit"></i></a>
                        </td>
                        <td>
                            <form action="{{ route('type_of_visitors.destroy',$item->id) }}" method="POST">
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
