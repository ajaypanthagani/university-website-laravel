@extends('layouts.main')

@section('content')
<div class='container'>
<h1>Edit</h1>
{{ Form::open(['action'=>['ProgrammeController@update', $programme->id], 'method'=>'POST']) }}
    <div class='form-group'>
        {{Form::label('name', 'Programme Name')}}
        {{Form::text('name', $programme->programme_name, ['class'=>'form-control', 'placeholder'=>'Name'])}}
    </div>
    <div class='form-group'>
        {{Form::label('type', 'Programme Type')}}
        {{Form::text('type', $programme->programme_type, ['class'=>'form-control', 'placeholder'=>'Type'])}}
    </div>
    <div class='form-group'>
        {{Form::label('description', 'Programme Description')}}
        {{Form::textArea('description', $programme->programme_description, ['class'=>'form-control', 'placeholder'=>'Description'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{{ Form::close() }}
</div>
@endsection