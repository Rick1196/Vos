@extends('resident')
@section('resident')
    <header class="header">
        <h1 class="title">Familiar del residente</h1>
        <h2 class="subtitle">Registrando a un nuevo familiar</h2><br>
    </header>
    <section>
        <form method="POST" action="{{ route('familiar.store') }}">
            @csrf

            <div class="field"><br>
                <label for="primay_id" class="label">Eres familiar de</label>
                <div class="control">
                    <div class="select is-info">
                        <select name="primay_id" id="primay_id">
                            <option value="{{ $residente->id }}"> {{ $residente->last_name }}, {{ $residente->first_name }} </option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="field">
                <label for="first_name" class="label">¿Cuál es el nombre del residente?</label>
                <input id="first_name" name="first_name" class="input" type="text"
                       placeholder="Aquí su nombre" required>
            </div>

            <div class="field">
                <label for="last_name" class="label">¿Cuáles son sus apellidos?</label>
                <input id="last_name" name="last_name" class="input" type="text"
                       placeholder="Aquí sus apellidos" required>
            </div>

            <div class="field">
                <label for="phone" class="label">¿Cuál es su número celular?</label>
                <input id="phone" name="phone" class="input" type="tel"
                       placeholder="Aquí su número de telefono celular" required>
            </div>

            <div class="field">
                <label for="email" class="label">¿Cuál es su correo electrónico?</label>
                <input id="email" name="email" class="input" type="email"
                       placeholder="Aquí su correo electrónico" required>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Crear</button>
                </div>
            </div>
        </form>
    </section>
@endsection
