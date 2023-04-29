@extends('layouts.app1')
<link rel="stylesheet" href="{{asset('demo.css')}}">
@section('content')
<div class="container py-5">
</div><!-- End -->
<div class="container">
  <div class="row text-center">
      <!-- Team item -->
      <div class="col-xl-6 col-sm-6 mb-5">
          <div class="bg-white rounded shadow-sm py-5 px-4"><img src="{{asset('storage/profile-pictures/'.Auth::user()->profile)}}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm">
              <h5 class="mb-0">{{Auth::user()->name}}</h5><span class="small text-uppercase text-muted">Auther</span>
              <ul class="social mb-0 list-inline mt-3">
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-facebook"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-twitter"></i></a></li>
                  <li class="list-inline-item"><a href="#" class="social-link"><i class="fa-brands fa-linkedin"></i></a></li>
              </ul>
          </div>
      </div>
</div>
  @endsection