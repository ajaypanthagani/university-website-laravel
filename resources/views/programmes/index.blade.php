@extends('layouts.main')

@section('content')
<h1 class='text-center'>programmes</h1>
<div class='container'>
@if(count($programmes)>0)
    @foreach($programmes as $programme)
        <hr>
        <div class="well">
                <h1 class=''><a href="/programmes/{{$programme->id}}">{{$programme->programme_name}}</a></h1>
                <span class="text-light bg-dark">{{$programme->programme_type}}</span>
                
        </div>
        <hr>
    @endforeach
@else
    <h1>No Programmes</h1>
@endif
</div>
@endsection