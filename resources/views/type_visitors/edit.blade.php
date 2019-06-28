@extends('visitors')
@section('visitors')
    <header class="header">
        <h1 class="title">Tipo de visitante</h1>
        <h2 class="subtitle">Crea nuevo tipo de visitante</h2>
    </header>
    <section>
        <form method="POST" action="{{ route('type_of_visitors.update', $typeOfVisitor->id) }}">
            @csrf
            @method('PUT')
            <div class="field">
                <label for="type" class="label">Tipo</label>
                <input id="type" name="type" class="input" type="text" placeholder="Aquí el nuevo tipo"
                       value="{{ $typeOfVisitor->type }}" required>
            </div>

            <div class="field">
                <label for="description" class="label">Descripción</label>
                <input id="description" name="description" class="input" type="text" placeholder="Aquí su descripción"
                       value="{{ $typeOfVisitor->description }}" required>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button class="button is-link" type="submit">Crear</button>
                </div>
            </div>
        </form>
    </section>
@endsection
