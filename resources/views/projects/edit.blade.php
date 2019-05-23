
@extends('layout')

@section('title')
  Edit Project
@endsection

@section('content')
  <div class="row">
    <div class="col s12">

    </div>
  </div>
  <h1>Edit Project</h1>

    <div class="row">
      <div class="col s12">
      </div>
    </div>
    <div class="row">
      <form method="POST" action="/projects/{{ $project->id }}" class="col s12">
        {{ method_field('PATCH')}}
        @csrf
        <div class="row">
          {{-- title input --}}
            <div class="input-field col s6">
              <input id="title" type="text" name="title" placeholder="Project title" value="{{ $project->title }}">
              <label for="title">Project title</label>
            </div>
          {{-- description  --}}
            <div class="input-field col s12">
              <textarea id="textarea1" name="description"  placeholder="Project description" class="materialize-textarea" >{{ $project->description }}</textarea>
              <label for="textarea1">Project description</label>
            </div>
          <div class="col s12">
            <button  class="blue btn" type="submit"><i class="fas fa-paper-plane"></i> Update Project</button>
          </div>
        </div>
      </form>

      <form method="POST" action="/projects/{{ $project->id }}" class="col s12" >
        {{ method_field('DELETE')}}
        @csrf
        <div class="row">
          <div class="col s12">
            <button  class="red btn" type="submit"><i class="fas fa-times"></i> Delect Project</button>
          </div>
        </div>
      </form>
    </div>
@endsection
