@extends('layouts.main')

@section('content')
<h1 class='text-center'>Tenders</h1>
<div class='container'>
<ul class='unstyled-list list-group'>
@if(count($tenders)>0)
    @foreach($tenders as $tender)
        <li class="list-group-item">
                <h1><a href="/tenders/{{$tender->id}}">{{$tender->tender_name}}</a></h1>
                <small class='text-dark'>created: {{$tender->created_at}}</small>
                <small class='text-danger float-right'>updated: {{$tender->updated_at}}</small>
        </li>
    @endforeach
@else
    <h1>No Programmes</h1>
@endif
</ul>
</div>
@endsection