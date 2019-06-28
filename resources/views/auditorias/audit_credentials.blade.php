@extends('auditoria')

@section('auditoria')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">

                <section>
                    @if (count($credenciales)==0)
                        <article class="message is-danger">
                            <div class="message-body">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>No hay registro de movimientos en la tabla conveyances</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
                                <strong>Necesita hacer la carga masiva de los datos desde la consola.</strong>
                            </div>
                        </article>
                    @else
                        <table class="table is-fullwidth">
                            <thead>
                            <tr>
                                <th>Descripcion</th>
                                <th>Fecha</th>
                            </thead>

                            <tbody>
                            @foreach ($credenciales as $credencial)
                                <tr>
                                    <td>{{ $credencial->descripcion }}</td>
                                    <td>{{ $credencial->fecha }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif
                </section>

            </div>
        </div>
    </div>
@endsection
