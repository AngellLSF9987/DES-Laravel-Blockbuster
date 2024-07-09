@extends('layouts.admin.home')
@section('title', $viewData["title"])
@section('author', $viewData["author"])
@section('content')
<div class="card">
    <div class="card-header">
        Manage Actors
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Born</th>
                    <th scope="col">Film</th>
                    <th scope="col">Image</th>
                    <!--<th scope="col">Image</th>-->
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData["actors"] as $actor)
                <tr>
                    <td>{{ $actor["id"] }}</td>
                    <td>{{ $actor["name"] }}</td>
                    <td>{{ $actor["born"] }}</td>
                    <td>{{ $actor["film"] }}</td>
                    <td>{{ $actor["image"] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
