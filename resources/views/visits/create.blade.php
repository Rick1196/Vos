@extends('visits')
@section('visits')
<visits-component user="{{Auth::user()->id}}"></visits-component>
@endsection
