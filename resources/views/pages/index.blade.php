@extends('layouts.homepage')

@section('header')
<section class="bgimage">
  <div class="container-fluid">
        <h4 class='text-center text-light display-3 d-none d-sm-block'>Dr APJ Abdul Kalam IIIT Ongole</h4>
        <h1 class='text-center text-light display-5 d-block d-sm-none'>Dr APJ Abdul Kalam IIIT Ongole</h1>
        <p class='text-center text-light'>Catering the educational needs of gifted rural youth</p>
        <p class='text-center'><a href="#" class="btn btn-outline-light btn-xlarge" style='width:250px;'>About »</a></p>
    </div>
</section>
@endsection

@section('notifications')
    <div class='card bg-dark text-light'>
        <div class='card-header'>
            <h3 class='text-center'>Tenders</h3>
        </div>
        <div class='card-body bg-light'>
            <div class='list-group'>
            <marquee behavior="scroll" direction="up" scrolldelay="100" scrollamount="4">
                    @if(count($tenders)>0)
                      @foreach ($tenders as $tender)
                      <li class="list-group-item">
                        <a href="/tenders/{{$tender->id}}">{{$tender->tender_name}}</a>    
                        <small class='mr-auto text-danger'>{{$tender->created_at}}</small>
                      </li>
                      @endforeach
                    @else
                      <a href="#!">No Tenders active</a>
                    @endif
            </marquee>
            </div>
        </div>
        <div class='card-footer'>
        <a href='/tenders' class='btn btn-outline-light'>More »</a>
        </div>
    </div>
@endsection

@section('administration')
<div class='card-deck'>
    <div class="card">
        <img class="card-img-top" src="/images/chancellor.jpg" alt="RGUKT Chancellor">
        <div class="card-body bg-dark text-light">
            <h4 class="card-title">Chancellor</h4>
            <p class="card-text">Prof. K.C.Reddy</p>
            <a href="#" class="btn btn-outline-light">See Profile »</a>
        </div>
    </div>
    <div class="card">
        <img class="card-img-top" src="/images/director.jpg" alt="RGUKT Director">
        <div class="card-body bg-dark text-light">
            <h4 class="card-title">Director</h4>
            <p class="card-text">Prof. Chunduri Venkata Rao</p>
            <a href="#" class="btn btn-outline-light">See Profile »</a>
        </div>
    </div>
</div>
@endsection

@section('footer')

<footer class="page-footer font-small pt-4 text-light" style='background-color: rgba(105, 14, 7, 0.8); text-decoration:none;'>

  <div class="container-fluid d-none d-sm-block">

   
    <div class="row">

      
      <div class="col-md-6">

        
        <h5 class="text-uppercase">RGUKT Ongole</h5>
        <p>Catering the educational needs of gited rural youth</p>
        <p>Established 2016</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-6">

        <!-- Links -->
        <h5 class="text-uppercase bg-warning text-dark">Quick Links</h5>

        <ul class="list-unstyled">
          <li>
            <a class='text-white' href="#!">Admissions UG</a>
          </li>
           <li>
            <a class='text-white' href="/tenders">Tenders at RGUKT</a>
          </li>
          <li>
            <a class='text-white' href="#!">Careers at RGUKT</a>
          </li>
          <li>
            <a class='text-white' href="#!">Contact Us</a>
          </li>
          <li>
            <a class='text-white' href="#!">About RGUKT</a>
          </li>
        </ul>

      </div>

    </div>

  </div>

  <div class="footer-copyright text-center py-3 bg-dark text-light">© 2018 Copyright:
    <a href="/">rgukt ongole</a>
  </div>

</footer>
@endsection