@extends('condominium')
@section('condominium')
<section>
    <div class="container">
        <h1 class="title">
            Arrendando casa
        </h1>
    </div>
    <div class="container">
        <div class="contianer">
            <arrending-component house="{{$house->id}}"></arrending-component>
        </div>
</section>
@endsection