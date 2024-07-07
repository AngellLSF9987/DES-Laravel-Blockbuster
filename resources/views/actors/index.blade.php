@extends('layouts.app')

@section('title', $viewData["title"])

@section('content')
<div class="container">
    <h1>{{ $viewData["subtitle"] }}</h1>
    <div class="row">
        @foreach ($viewData["actors"] as $actor)
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="{{ asset('/img/' . $actor->image) }}" class="card-img-top img-fluid">
                    <div class="card-body">
                        <h5 class="card-title">{{ $actor->name }}</h5>
                        <p class="card-text">{{ $actor->film }}</p>
                        <a href="{{ route('actors.show', ['id' => $actor->id]) }}" class="btn btn-primary">Ver más</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection



{{--@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
<div class="row">
  @foreach ($viewData["actors"] as $actors)
  <div class="col-md-4 col-lg-3 mb-2">
    <div class="card">
      <img src="{{ asset('/img/'.$actors["image"]) }}" class="card-img-top img-card">
      <div class="card-body text-center">
        <a href="{{ route('actors.show', ['id'=> $actors["id"]]) }}"
          class="btn bg-primary text-white">{{ $actors["name"] }}</a>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection--}}