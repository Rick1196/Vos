@extends('visitors')
@section('visitors')
    <header class="header">
        <h1 class="title">Tipo de transporte</h1>
        <h2 class="subtitle">Editando</h2>
    </header>
    <section>
        <form method="POST" action="{{ route('conveyances.update', $conveyance->id) }}">
            @csrf
            @method('PUT')
            <div class="field">
                <label for="type" class="label">Tipo</label>
                <input id="type" name="type" class="input" type="text" placeholder="Aquí el nuevo tipo"
                       value="{{ $conveyance->type }}" required>
            </div>

            <div class="field">
                <label for="description" class="label">Descripción</label>
                <input id="description" name="description" class="input" type="text" placeholder="Aquí su descripción"
                       value="{{ $conveyance->description }}" required>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Crear</button>
                </div>

            </div>
        </form>
        <div class="control">
            <a class="button is-text" href="{{ redirect()->route('conveyances.index') }}">Cancel</a>
        </div>
    </section>
@endsection
