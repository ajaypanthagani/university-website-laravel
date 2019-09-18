@extends('layouts.main')

@section('content')
<div class='container'>
<h1>Edit</h1>
{{ Form::open(['action'=>['TendersController@update', $tender->id], 'method'=>'POST']) }}
    <div class='form-group'>
        {{Form::label('title', 'Tender Name')}}
        {{Form::text('title', $tender->tender_name, ['class'=>'form-control', 'placeholder'=>'Name'])}}
    </div>
    <div class='form-group'>
        {{Form::label('description', 'Tender Description')}}
        {{Form::textArea('description', $tender->tender_description, ['class'=>'form-control', 'placeholder'=>'Description'])}}
    </div>
    {{Form::hidden('_method', 'PUT')}}
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
{{ Form::close() }}
</div>
@endsection