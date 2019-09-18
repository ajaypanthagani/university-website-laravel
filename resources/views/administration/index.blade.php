@extends('layouts.main')

@section('content')
<div class='container'>
@if(count($administration)>0)
    @foreach($administration as $admin)
            <h1 id="{{$admin->position}}">{{$admin->name}}</h1>
            <h1>{{$admin->position}}</h1>
            <img src="/pofile_images/{{$admin->profile_image}}" alt="profile_image">
    @endforeach
@else
    <h1>no entries</h1>
@endif
@endsection