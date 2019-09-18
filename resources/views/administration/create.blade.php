@extends('layouts.main')

@section('content')
<div class='container'>
<h1>create</h1>
{{ Form::open(['action'=>'AdministrationController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data']) }}
    <div class='form-group'>
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Name'])}}
    </div>
    <div class='form-group'>
        {{Form::label('position', 'Position')}}
        {{Form::text('position', '', ['class'=>'form-control', 'placeholder'=>'Position'])}}
    </div>
    <div class='form-group'>
        {{Form::label('about', 'About')}}
        {{Form::textArea('about', '', ['class'=>'form-control', 'placeholder'=>'about'])}}
    </div>
      <div class='form-group'>
        {{Form::label('profile_image', 'Upload Profile Image')}}
        {{Form::file('profile_image')}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{{ Form::close() }}
</div>
@endsection