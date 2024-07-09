@extends('layouts.admin')
@section('title', $viewData["title"])
@section('author', $viewData["author"])
@section('content')
<div class="card-header">
  <div class="card-title">
    <h4>Welcome to the Admin Panel, use the sidebar to navigate between the different options.</h4>
  </div>
  <div class="img">
    <img src="{{ asset('/img/background1.jpg') }}" alt="logo_Admin" />
  </div>
</div>
<div class="card-body">
  @yield('list')
</div>
<div class="card text-start">
  <a href="{{ route('home.index') }}" class="mt-2 btn bg-primary text-white">Go back to the home page</a>
</div>
@endsection