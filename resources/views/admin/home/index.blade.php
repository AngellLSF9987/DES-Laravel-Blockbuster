@extends('layouts.admin')
@section('title', $viewData["title"])
@section('author', $viewData["author"])
@section('content')
<div class="card text-start">
  <div class="card-header">
    <h4 class="card-title">Welcome to the Admin Panel, use the sidebar to navigate between the different options.</h4>
  </div>
  <div class="img">
    <img src="{{ asset('/img/background1.jpg') }}" alt="Title" />
  </div>
  <div class="card-body">
    @yield('content')
  </div>
</div>
@endsection