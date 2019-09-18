@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div class='jumbotron'>
                    <h1>Academics section</h1>
                    <hr>
                    <a class='btn btn-primary text-light' href="/programmes/create">Create Programme</a>
                    <hr>
                    <a class='btn btn-primary text-light' href="#">Create Curricula</a>
                    <hr>
                    <a class='btn btn-primary text-light' href="#">Create Academic Regulation</a>
                    <hr>
                    <a class='btn btn-primary text-light' href="#">Create Academic Calender</a>
                    <hr>
                    </div>

                    <div class='jumbotron'>
                    <h1>Administration section</h1>
                    <hr>
                    <a class='btn btn-primary text-light' href="#">Update Director Profile</a>
                    <hr>
                    <a class='btn btn-primary text-light' href="#">Update Chancellor Profile</a>
                    <hr>
                    <a class='btn btn-primary text-light' href="#">Update Vice Chancellor Profile</a>
                    <hr>
                    <a class='btn btn-primary text-light' href="#">Create Faculty Profile</a>
                    <hr>
                    </div>

                    <div class='jumbotron'>
                    <h1>Departments Section</h1>
                    <hr>
                    <a class='btn btn-primary text-light' href="#">Create Department</a>
                    <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
