@extends('visitors')
@section('visitors')
    <section>
        <header class="section">
            <h1 class="title">
                Visitantes
            </h1>
            <h2 class="subtitle">
                ¿Quienes pueden realizar visitas al interior de la privada?
            </h2>

        </header>
        @if (count($MyGroupBy)==0)
            <article class="message is-danger">
                <div class="message-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>No hay registro de visitantes</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
                    <a class="button is-link" href="{{ route('visitante.crear') }}">Agrega los datos de un visitante</a>
                </div>
            </article>
        @else

            <table class="table is-fullwidth">
                <thead>
                <tr>
                    <th>Tipo</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono de contacto</th>
                    <th>Eliminar </th>
                </tr>
                </thead>
                @foreach($MyGroupBy as $group)

                <tbody>
                @foreach ($group as $visitante)
                    <tr>
                        <td>{{ $visitante->tipoDeVisitante->type }}</td>
                        <td>{{ $visitante->first_name }}</td>
                        <td>{{ $visitante->last_name }}</td>
                        <td>{{ $visitante->phone }}</td>

                        <td>
                            <form method="POST"
                                  action="{{ route('visitante.eliminar', $visitante->id) }}" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>

                    </tr>
                @endforeach
                </tbody>
                @endforeach

            </table>

        @endif
    </section>
@endsection
