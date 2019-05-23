
@extends('layout')

@section('title')
  Projects
@endsection

@section('content')
  <h1>Projects</h1>
  <ul>
    @foreach ($projects as $project)
      <li><h4><a href="/projects/{{ $project->id }}">{{ $project->title }}</a></h4></li>
    @endforeach
  </ul>

@endsection
