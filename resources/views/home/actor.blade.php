@extends('layouts.app')
@section('title', $viewData["name"])
@section('subtitle', $viewData["born"])
@section('content')

{{--Las dos líneas siguientes definen lo mismo; Una sección llamada nombre.
En la primera línea se llama a la vista. En la segunda, se define la @section y se le añade su valor--}}
<h3>{{$viewData["name"]}}</h3>
<h5>Nacionalidad: {{$viewData['born']}}</h5>
<h4>Película destacada: {{$viewData['film']}}</h4>
<!--<p><img src="{{--$viewData['imagen']--}}"></p>-->
<div class="row">
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{$viewData['imagen1']}}">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{$viewData['imagen2']}}">
    </div>
    <div class="col-md-6 col-lg-4 mb-2">
        <img src="{{$viewData['imagen3']}}">
    </div>
</div>
@endsection
