@extends('resident')
@section('resident')
    @if( count($tipos) == 0)
        <header class="section">
            <h1 class="title">
                Configurando
            </h1>
            <h2 class="subtitle">
                Nullam gravida purus diam, et dictum felis venenatis efficitur.
            </h2>
        </header>

        <article class="message is-link">
            <div class="message-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>El sistema no tiene ningún registro de tipos de residentes</strong>,
                tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla.
                Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>,
                in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor
                mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
                <a class="button is-link" href="{{ route('tipos_de_residentes.create') }}">Agrega los tipos de residentes</a>
            </div>
        </article>
    @else
        <section>
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>Tipos</th>
                        <th>Descripción</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($tipos as $tipo)
                    <tr>
                        <td>{{ $tipo->type }}</td>
                        <td>{{ $tipo->description }}</td>
                        <td>
                            <a class="button has-text-info" href="{{ route('tipos_de_residentes.edit', $tipo->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('tipos_de_residentes.destroy', $tipo->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button has-text-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </section>
    @endif
@endsection
