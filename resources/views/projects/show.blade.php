
@extends('layout')

@section('title')
  Show Data
@endsection

@section('content')
  <h1>{{ $project->title }}</h1>
  <hr>
  <p>{{$project->description}}</p>
  <a class="pink btn" href="/projects/{{$project->id}}/edit">Edit</a>
  <div class="row">
    <div class="col s12">
    </div>
  </div>
@endsection
