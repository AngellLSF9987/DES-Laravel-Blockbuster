@extends('layouts.admin')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="card mb-3">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="{{ asset('/img/'.$viewData["actors"]->getImage()) }}" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">
          {{ $viewData["actors"]->getName() }}
        </h5>
        <p class="card-text">{{ $viewData["actors"]->getBorn() }}</p>
        <p class="card-text">{{ $viewData["actors"]->getFilm() }}</p>
      </div>
    </div>
  </div>
</div>
@endsection