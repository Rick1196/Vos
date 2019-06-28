@extends('visitors')
@section('visitors')
    <section>
        <header class="section">
            <h1 class="title">
                Tipos de transportes
            </h1>
            <h2 class="subtitle">
                ¿Cuáles son los medios de transportes que pueden ingresar a la privada un visitante?
            </h2>
            <p>En esta sección podrá gestionar los medios de transportes con los cuales las visitas podrian ingresar a la privada.</p>
            <a class="button is-warning" href="{{ route('conveyances.create') }}">Agrega nuevo tipo</a>
        </header>
        @if (count($type)==0)
            <div class="notification is-danger">
                <button class="delete"></button>
                Primar lorem ipsum dolor sit amet, consectetur
                adipiscing elit lorem ipsum dolor. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Sit amet,
                consectetur adipiscing elit
            </div>
        @else
            <table class="table is-fullwidth">
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
                            <a class="btn btn-primary" href="{{ route('conveyances.edit',$item->id) }}"><i class="fas fa-edit"></i></a>
                        </td>
                        <td>
                            <form action="{{ route('conveyances.destroy',$item->id) }}" method="POST">
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
