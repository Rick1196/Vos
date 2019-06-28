@extends('condominium')
@section('condominium')
    <header class="header">
        <h1 class="title">Configurando</h1>
        <h2 class="subtitle">Dirección </h2>
    </header>
    <section>
        <form method="POST" action="{{ route('condominium.update', $condominium->id) }}">
            @csrf
            @method('PUT')
            <div class="field">
                <label for="name" class="label">¿Cuál es el nombre del condominio?</label>
                <input id="name" name="name" class="input"
                       type="text"
                       placeholder="Aquí el nombre del condominio"
                       value="{{ $condominium->name }}" required>
            </div>

            <div class="field">
                <label for="phone" class="label">Telefono</label>
                <input id="phone" name="phone" class="input" type="tel"
                       placeholder="Aquí el número telefonico del condominio"
                       value="{{ $condominium->phone }}" required>
            </div>

            <div class="field">
                <label for="address" class="label">¿Cuál es la dirección del condominio?</label>
                <input id="address" name="address" class="input" type="text"
                       placeholder="Aquí su ubicación"
                       value="{{ $condominium->address }}" required>
            </div>

            <div class="field">
                <label for="postal" class="label">¿Cuál es el su código postal?</label>
                <input id="postal" name="postal"
                       class="input"
                       type="number"
                       placeholder="Aquí el código postal"
                       value="{{ $condominium->postal }}" required>
            </div>

            <div class="field">
                <label for="number" class="label">¿Cuántas casas tiene el condominio?</label>
                <input id="number" name="number"
                       class="input"
                       type="number"
                       placeholder="Aquí el número de casas"
                       value="{{ $condominium->num_rented_houses }}" required>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Actualizar</button>
                </div>
            </div>
        </form>
    </section>
@endsection
