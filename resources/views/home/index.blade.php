@extends('layouts.app')
@section('title', $viewData["title"])
@section('author', $viewData["author"])
@section('content')

<div class="container-fluid" style="background-color:black;">
    <h1 style="text-align:center; color:white;">Films - Actors && Actress</h1>
    <div class="row">
        <img src="{{ asset('/img/background1.jpg') }}" class="img-fluid">
    </div>
</div>
@endsection
