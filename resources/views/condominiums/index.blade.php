@extends('condominium')
@section('condominium')
    <section>
        @if (count($condominios)==0)
            <header class="section">
                <h1 class="title">
                    Configurando
                </h1>
                <h2 class="subtitle">
                    Ingrese sus datos de ubicación
                </h2>


            </header>
            <article class="message is-link">
                <div class="message-body">
                    No hay condominios registrador
                    <a class="button is-link" href="{{ route('condominium.create') }}">Agrega la ubicación del condominio</a>
                </div>
            </article>
        @else
            <div class="container">
                <h3>
                    <p class="text-center">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <p class="text-center">{{ $message }}</p>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
    
                        @endif
                    </p>
                </h3>
            </div>
            <div class="container">
                <a class="button is-link" href="{{ route('condominium.create') }}">Agrega condominio</a>
            </div><br>
            @foreach($condominios as $condominio)
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            {{ $condominio->name }}
                        </p>

                    </header>
                    <div class="card-content">
                        <div class="content">
                            {{ $condominio->address }}
                            <br>
                            <p>Código postal <strong>{{ $condominio->postal }}</strong></p>
                            @if ($condominio->num_rented_houses == 0)
                                <p><strong>No hay casas en arrendamiento.</strong></p>
                            @else
                                <p>Numero de casas en renta: <strong>{{ $condominio->num_rented_houses }}</strong></p>
                            @endif
                        </div>
                    </div>
                    <footer class="card-footer">
                        <p href="#" class="card-footer-item">Telefono: {{ $condominio->phone }}</p>
                        <a href="{{ route('condominium.edit', $condominio->id) }}" class="card-footer-item">Editar</a>
                        <form action="{{ route('condominium.destroy',$condominio->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button  type="submit" class="card-footer-item btn btn-light">Eliminar condominio</button>
                        </form>
                        <a href="{{ route('condominium.houses', $condominio->id) }}" class="card-footer-item">Listar casas</a>
                    </footer>
                </div><br>
            @endforeach
            {{$condominios->links()}}
        @endif
    </section>
@endsection
