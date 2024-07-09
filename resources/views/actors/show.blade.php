@extends('layouts.app')

@section('title', $viewData["title"])

@section('content')
<div class="container">
    <h1>{{ $viewData["subtitle"] }}</h1>
    <div class="row">
        <div class="col-md-6">
            <img src="{{ asset('/img/' . $viewData["actor"]->image) }}" class="img-fluid">
        </div>
        <div class="col-md-6">
            <h2>{{ $viewData["actor"]->name }}</h2>
            <p><strong>Fecha de nacimiento:</strong> {{ $viewData["actor"]->born }}</p>
            <p><strong>Película más conocida:</strong> {{ $viewData["actor"]->film }}</p>
        </div>
    </div>
</div>
@endsection