@extends('vigilantes')
@section('vigilantes')
    @if(count($vigilantes)==0)

        <header class="section">

        </header>

        <article class="message is-link">
            <div class="message-body">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>,
                tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla.
                Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>,
                in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor
                mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
                <a class="button is-link" href="{{ route('vigilantes.create') }}">Agrega los datos de un vigilante</a>
            </div>
        </article>

    @else
        <section>
            <header class="header">
                <h1 class="title">
                    Configurando
                </h1>
            </header>
            <table class="table is-fullwidth">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellidos</th>
                        <th>Telefono</th>
                        <th>Condominio</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($vigilantes as $vigilant)
                    <tr>
                        <td>{{ $vigilant->first_name }}</td>
                        <td>{{ $vigilant->last_name }}</td>
                        <td>{{ $vigilant->phone }}</td>
                        <td>{{ $vigilant->atCondominium->name }}</td>
                        <td>
                            <a class="button has-text-info" href="{{ route('vigilantes.edit', $vigilant->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <form method="POST" action="{{ route('vigilantes.destroy', $vigilant->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button has-text-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            {{ $vigilantes->links() }}
        </section>
    @endif
@endsection
