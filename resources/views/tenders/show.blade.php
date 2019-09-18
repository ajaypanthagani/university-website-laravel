@extends('layouts.main')

@section('content')
<h1 class='text-center'>Tenders</h1>
<div class='container'>
    <div class='row'>
        <div class='col-sm-8'>
            <h1>{{$tender->tender_name}}</h1>
            <p>{{$tender->tender_description}}</p>
        </div>
        <div class='col-sm-4'>
            <div class='card bg-dark text-light'>
                <div class='card-header'>
                    <h1>important dates</div>
                </div>
                <div class='card-body bg-light'>
                    <ul class='list-group unstyled-list'>
                        <li class='list-group-item'><p><span style='font-weight:bold;'>released date:</span>{{$tender->created_at}}</p>
                        <li class='list-group-item'><p><span style='font-weight:bold;'>updated date:</span>{{$tender->updated_at}}</p>
                        <li class='list-group-item'><p><span class='text-danger' style='font-weight:bold;'>deadline:</span></p>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection