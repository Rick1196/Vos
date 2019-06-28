@extends('resident')
@section('resident')
    <section>
        <header class="section">
            <h1 class="title">
                Residentes
            </h1>
            <h2 class="subtitle">
                Los residentes
            </h2>
            <p>Aquí se<strong> gestionarán los residentes de la privada.</strong>
            </p>
            <a class="button is-warning" href="{{ route('residentes.create') }}">Agrega un nuevo residente</a>
        </header>
        @if (count($residentes)==0)
            <div class="notification is-danger">
                <button class="delete"></button>
                No hay residentes registrados
            </div>
        @else
            <table class="table">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Tipo de residente</th>
                    <th>Ver</th>
                    <th>Nuevo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($residentes as $residente)
                    @if($residente->relatives_id == null)
                    <tr>
                        <td>{{ $residente->first_name }}</td>
                        <td>{{ $residente->last_name }}</td>
                        <td>{{ $residente->tipoDeResidente->type }}</td>
                        <td>
                            @if($residente->relatives_id == null)
                                <a class="button btn-primary has-text-primary" href="{{ route('residentes.show',$residente->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                            @else

                            @endif
                        </td>
                        <td>
                            @if($residente->relatives_id == null)
                                <a class="button btn-primary has-text-link" href="{{ route('familiar',$residente->id) }}">
                                    <i class="fas fa-user-plus"></i>
                                </a>
                            @else

                            @endif
                        </td>
                        <td>
                            <a class="button btn-primary has-text-info" href="{{ route('residentes.edit',$residente->id) }}">
                                <i class="fas fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ route('residentes.destroy',$residente->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button has-text-danger"><i class="fas fa-trash-alt"></i></button>
                            </form>
                        </td>
                    </tr>
                    @else
                        <tr>
                            <td class="has-text-grey-light">{{ $residente->first_name }}</td>
                            <td class="has-text-grey-light">{{ $residente->last_name }}</td>
                            <td class="has-text-grey-light">{{ $residente->tipoDeResidente->type }}</td>
                            <td class="has-text-grey-light">
                                @if($residente->relatives_id == null)
                                    <a class="button btn-primary has-text-primary" href="{{ route('residentes.show',$residente->id) }}">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                @else

                                @endif
                            </td>
                            <td>
                                @if($residente->relatives_id == null)
                                    <a class="button btn-primary has-text-link" href="{{ route('familiar',$residente->id) }}">
                                        <i class="fas fa-user-plus"></i>
                                    </a>
                                @else

                                @endif
                            </td>
                            <td>
                                <a class="button btn-primary has-text-info" href="{{ route('residentes.edit',$residente->id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('residentes.destroy',$residente->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button has-text-danger"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
            {{$residentes->links()}}
        @endif
    </section>
@endsection
