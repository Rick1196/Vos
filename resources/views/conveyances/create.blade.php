@extends('visitors')
@section('visitors')
    <header class="header">
        <h1 class="title">Tipo de transporte</h1>
        <h2 class="subtitle">Agrega nuevo tipo de transporte</h2>
    </header>
    <section>
        <form method="POST" action="{{ route('conveyances.store') }}">
            @csrf
            <div class="field">
                <label for="type" class="label">Tipo</label>
                <input id="type" name="type" class="input" type="text" placeholder="Aquí el nuevo tipo" required>
            </div>

            <div class="field">
                <label for="description" class="label">Descripción</label>
                <input id="description" name="description" class="input" type="text" placeholder="Aquí su descripción" required>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Crear</button>
                </div>
            </div>
        </form>
    </section>
@endsection
