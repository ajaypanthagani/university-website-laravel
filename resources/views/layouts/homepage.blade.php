@extends('layouts.main')

@section('content')
<div class='container-fluid'>
    @yield('header')
</div>
<hr>
<div class='container-fluid'>
    <div class='row'>
        <div class='col-sm-8'>
            @yield('administration')
        </div>
        <div class='col-sm-4'>
            @yield('notifications')
        </div>
    </div>
    <hr>
    <div class='row'>
        <div class='col'>
            @yield('footer')
        </div>
    </div>
</div>
@endsection