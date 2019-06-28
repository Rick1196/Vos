@extends('visitors')
@section('visitors')
    <header class="header">
        <h1 class="title">Editar credencial</h1>
        <h2 class="subtitle">Editanto</h2>
    </header>
    <section>
        <form method="POST" action="{{ route('credentials.update', $credential->id) }}">
            @csrf
            @method('PUT')
            <div class="field">
                <label for="type" class="label">Tipo</label>
                <input id="type" name="type" class="input" type="text" placeholder="Aquí el nuevo tipo"
                       value="{{ $credential->type }}" required>
            </div>

            <div class="field">
                <label for="description" class="label">Descripción</label>
                <input id="description" name="description" class="input" type="text" placeholder="Aquí su descripción"
                       value="{{ $credential->description }}" required>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Crear</button>
                </div>

            </div>
        </form>
    </section>
@endsection
