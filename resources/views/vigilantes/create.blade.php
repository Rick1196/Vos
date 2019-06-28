@extends('vigilantes')
@section('vigilantes')
    <section>
        <form method="POST" action="{{ route('vigilantes.store') }}">
            @csrf
            <div class="field"><br>
                <label for="condominium" class="label">¿Cuál su lugar de estancia?</label>
                <div class="control">
                    <div class="select is-info">
                        <select name="condominium" id="condominium">
                            <option value="" disabled selected>-- Elige una opción --</option>
                            @foreach($condominiums as $condominium)
                                <option value="{{ $condominium->id }}">{{ $condominium->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {!! $errors->first('condominium', '
                    <small class="has-text-danger">:message</small>
                ') !!}
            </div>

            <div class="field">
                <label for="first_name" class="label">¿Cuál es el nombre del vigilante?</label>
                <input id="first_name" name="first_name" class="input" type="text" placeholder="Aquí el nombre del vigilante"
                       value="{{ old('first_name') }}">
                {!! $errors->first('first_name', '
                    <small class="has-text-danger">:message</small>
                ') !!}
            </div>

            <div class="field">
                <label for="last_name" class="label">¿Cuáles son sus apellidos?</label>
                <input id="last_name" name="last_name" class="input" type="text" placeholder="Aquí el sus apellidos"
                       value="{{ old('last_name') }}">
                {!! $errors->first('last_name', '
                    <small class="has-text-danger">:message</small>
                ') !!}
            </div>

            <div class="field">
                <label for="phone" class="label">¿Cuál es su número celular?</label>
                <input id="phone" name="phone" class="input" type="tel" placeholder="Aquí su número celular"
                       value="{{ old('phone') }}">
                {!! $errors->first('phone', '
                    <small class="has-text-danger">:message</small>
                ') !!}
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Crear</button>
                </div>
            </div>
        </form>
    </section>
@endsection
