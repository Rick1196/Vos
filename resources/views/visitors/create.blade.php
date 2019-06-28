@extends('visitors')
@section('visitors')
    <header class="header">
        <h1 class="title">Visitante</h1>
        <h2 class="subtitle">Progama la visita de un servicio o de un conocido</h2>
        <p>
            Es necesario que rellene cada uno de los campos con los datos correctos, pues en
            caso de una emergencia podremos comunicarnos con esta persona o servicio.
        </p><br>
    </header>
    <section>
        <form method="POST" action="{{ route('visitante.store') }}">
            @csrf
            <div class="field"><br>
                <label for="type_visitor" class="label">¿Qué tipo de visita tendra?</label>
                <div class="control">
                    <div class="select is-info">
                        <select name="type_visitor" id="type_visitor">
                            <option value="" disabled selected>-- Selecciona una opcion --</option>
                            @foreach($tiposDeVisitantes as $tipoVisitante)
                                <option value="{{ $tipoVisitante->id }}">{{ $tipoVisitante->type }}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('type_visitor', '
                            <small class="has-text-danger">:message</small>
                        ') !!}
                    </div>
                </div>
            </div>
            <div class="field"><br>
                <label for="first_name" class="label">¿Cuál es el nombre de la persona?</label>
                <input id="first_name" name="first_name" class="input" type="text" placeholder="Aquí su nombre" value="{{ old('first_name') }}">
                {!! $errors->first('first_name', '
                    <small class="has-text-danger">:message</small><br>
                ') !!}
            </div>

            <div class="field">
                <label for="last_name" class="label">¿Cuáles son sus apellidos?</label>
                <input id="last_name" name="last_name" class="input" type="text" placeholder="Aquí su apellido o apellidos" value="{{ old('last_name') }}">
                {!! $errors->first('last_name', '
                    <small class="has-text-danger">:message</small><br>
                ') !!}
            </div>

            <div class="field">
                <label for="phone" class="label">Telefono</label>
                <input id="phone" name="phone" class="input" type="tel" placeholder="Aquí su telefono" value="{{ old('phone') }}">
                {!! $errors->first('phone', '
                    <small class="has-text-danger">:message</small><br>
                ') !!}
            </div>

            <div class="field"><br>
                <label for="credential" class="label">¿Cuál es el tipo de credencial con la que se estan identificando?</label>
                <div class="control">
                    <div class="select is-info">
                        <select name="credential" id="credential">
                            <option value="" disabled selected>-- Selecciona una opción --</option>
                            @foreach($credenciales as $credencial)
                                <option value="{{ $credencial->id }}">{{ $credencial->type }}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('credential', '
                            <small class="has-text-danger">:message</small><br>
                        ') !!}
                    </div>
                </div>
            </div>

            <div class="field"><br>
                <label for="conveyance" class="label">¿Qué medio de transporte utilizan para ingresar?</label>
                <div class="control">
                    <div class="select is-info">
                        <select name="conveyance" id="conveyance">
                            <option value="" disabled selected>-- Selecciona una opción --</option>
                            @foreach($transportes as $transporte)
                                <option value="{{ $transporte->id }}">{{ $transporte->type }}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('conveyance', '
                            <small class="has-text-danger">:message</small><br>
                        ') !!}
                    </div>
                </div>
            </div><br>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Crear</button>
                </div>

            </div>
        </form>

    </section>
@endsection
