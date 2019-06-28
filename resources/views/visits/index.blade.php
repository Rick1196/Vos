@extends('visits')
@section('visits')
    <section>
        <header class="section">
            <h1 class="title">
                Visitantes
            </h1>
            <h2 class="subtitle">
                ¿Quienes pueden realizar visitas al interior de la privada?
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
                    <th>Vigilante</th>
                    <th>Visita a:</th>
                    <th>Fecha </th>
                </tr>
                </thead>
                @foreach($visits as $group)

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
