@extends('layout')

@section('title')
  Create New Projects
@endsection

@section('content')
  <div class="row">
    <div class="col s12">
    </div>
  </div>
  <div class="row">
    <form method="POST" action="/projects" class="col s12">
      {{ csrf_field() }}
      <div class="row">
        {{-- title input --}}
          <div class="input-field col s6">
            <input id="title" type="text" name="title" requied placeholder="Project title" class="validate" value="{{old('title')}}">
            <label for="title" class="{{$errors->has('title') ? 'red-text':'' }}">Project title</label>
          </div>
        {{-- description  --}}
          <div class="input-field col s12">
            <textarea id="textarea1" name="description" requied placeholder="Project description" class="materialize-textarea">{{old('description')}}</textarea>
            <label for="textarea1" class="{{$errors->has('description') ? 'red-text':'' }}">Project description</label>
          </div>
        <div class="col s12">
          <button  class="waves-effect waves-light btn" type="submit">Create Project  <i class="fas fa-paper-plane"></i></button>
        </div>
      </div>
      @if($errors->any())
      <div class="col s12 red lighten-5">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif
    </form>
  </div>
@endsection
