@extends('layouts.app')
    <link rel="stylesheet" href="{{asset('style.css')}}">
    @section('content')
        
  <div class="container ms-auto me-auto">
    <div class="blog">
      <img src="{{asset('storage/profile-pictures/' . $post->user->profile )}}" alt="">
      <!-- <img src="./assets/images/male.png" alt=""> -->

      <!-- auther name -->
      <div class="class">{{$post->user->name}}</div>

      <!-- specialization -->
     <div class="class">Auther</div>

      <div class="buttons">
        <button class="btn btn-outline-primary"><i class="fa-solid fa-envelope"></i></button>
        <button class="btn btn-outline-success ms-4"><i class="fa-solid fa-phone"></i></button>
      </div>
    </div> 
  </div>  
  @endsection