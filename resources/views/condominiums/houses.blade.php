@extends('condominium')
@section('condominium')
<section>
    <div class="container">
        <table class="table">
                <thead>
                <tr>
                    <th>Estado</th>
                    <th>Numero de habitantes</th>
                    <th>Residente</th>
                    <th>Opciones</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($casas as $house)
                        <tr>
                            @if($house->estado != 0)
                            <td>Arrendada</td>
                            @else
                                <td>Disponible</td>
                            @endif

                            <td>{{$house->habitantes}}</td>

                            @if($house->id_residente != null)
                                <td>{{$house->owner->first_name}}</td>
                            @else
                                <td>Disponible</td>
                            @endif

                            @if($house->id_residente == null)
                                <td><a class="btn btn-primary" href="{{ route('condominium.arrending',$house->id) }}">Rentar</button></a>
                            @else

                                 <td><button class="btn btn-primary" disabled>Rentar</button></td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table><br>
        {{$casas->links()}}
    </div>
</section>
@endsection