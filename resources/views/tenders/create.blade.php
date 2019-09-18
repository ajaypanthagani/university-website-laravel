@extends('layouts.main')

@section('content')
<div class='container'>
<h1>create</h1>
{{ Form::open(['action'=>'TendersController@store', 'method'=>'POST']) }}
    <div class='form-group'>
        {{Form::label('title', 'Tender Title')}}
        {{Form::text('title', '', ['class'=>'form-control', 'placeholder'=>'Title'])}}
    </div>
    <div class='form-group'>
        {{Form::label('description', 'Tender Description')}}
        {{Form::text('description', '', ['class'=>'form-control', 'placeholder'=>'Description'])}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{{ Form::close() }}
</div>
@endsection