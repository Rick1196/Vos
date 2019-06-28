@extends('vigilantes')
@section('vigilantes')
    <header class="header">
        <h1 class="title">Modifica el registro</h1>
        <h2 class="subtitle">Vigilante</h2> <br>
    </header>
    <section>
        <form method="POST" action="{{ route('vigilantes.update', $vigilante->id) }}">
            @csrf
            @method('PUT')

            <div class="field">
                <label for="first_name" class="label">¿Cuál es el nombre del vigilante?</label>
                <input id="first_name" name="first_name" class="input" type="text"
                       placeholder="Aquí el nombre del vigilante"
                       value="{{ $vigilante->first_name }}">
            </div>

            <div class="field">
                <label for="last_name" class="label">¿Cuáles son sus apellidos?</label>
                <input id="last_name" name="last_name" class="input" type="text"
                       placeholder="Aquí el sus apellidos"
                       value="{{ $vigilante->last_name }}">
            </div>

            <div class="field">
                <label for="phone" class="label">¿Cuál es su número celular?</label>
                <input id="phone" name="phone" class="input" type="tel"
                       placeholder="Aquí su número celular"
                       value="{{ $vigilante->phone }}">
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Actualizar</button>
                </div>
            </div>
        </form>
    </section>
@endsection
