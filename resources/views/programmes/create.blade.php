@extends('layouts.main')

@section('content')
<div class='container'>
<h1>create</h1>
{{ Form::open(['action'=>'ProgrammeController@store', 'method'=>'POST']) }}
    <div class='form-group'>
        {{Form::label('name', 'Programme Name')}}
        {{Form::text('name', '', ['class'=>'form-control', 'placeholder'=>'Name'])}}
    </div>
    <div class='form-group'>
        {{Form::label('type', 'Programme Type')}}
        {{Form::text('type', '', ['class'=>'form-control', 'placeholder'=>'Type'])}}
    </div>
    <div class='form-group'>
        {{Form::label('description', 'Programme Description')}}
        {{Form::textArea('description', '', ['class'=>'form-control', 'placeholder'=>'Description'])}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{{ Form::close() }}
</div>
@endsection