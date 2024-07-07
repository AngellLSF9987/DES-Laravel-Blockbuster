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


{{--@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('/img/'.$viewData["actors"]["image"]) }}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
           {{ $viewData["actors"]["name"] }} {{ $viewData["actors"]["id"] }}
        </h5>
        <p class="card-text">{{ $viewData["actors"]["born"] }}</p>
        <p class="card-text">{{ $viewData["actors"]["film"] }}</p>
      </div>
    </div>
  </div>
</div>
@endsection--}}
