@extends('layouts.app')
<link rel="stylesheet" href="{{asset('css/comment.css')}}">
@section('content')
{{-- <div class="card text-center w-25 text-center ms-auto me-auto">
    <div class="card-header">
        <span class="text-primary">Auther: </span> {{$post->user->name}} <img src="{{asset('storage/profile-pictures/'.$post->user->profile)}}" alt="" class="rounded-circle" style="width:20px;height:20px">
    </div>
    <div class="card-body"> --}}
      {{-- <span class="text-primary">Title : </span><h5 class="card-title d-inline-block">{{$post->title}}</h5>
      <p class="card-text">{{$post->content}}</p>
      <form action="{{route('comments.store')}}" method="POST">
        @csrf
      <div class="input-group input-group-sm mb-3">
        <span class="input-group-text" id="inputGroup-sizing-sm">Comment</span>
        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="comment" required>
        <input type="hidden" name="post_id" value="{{$post->id}}">
      </div>
      <button type="submit" class="btn btn-primary">Comment</button>
    </form>
    </div>
    <div class="card-footer text-body-secondary">
        Comments
          <ol class="list-group" id="ol">
        @foreach ($comments as $comment)
        <li class="list-group-item" style="list-style-type: none" id="comment<?php echo $comment->id ?>">
          <span><img src="{{asset('storage/profile-pictures/'. $comment->user->profile)}}" style="width:30px;height:30px" class="rounded-circle">
          @if ($comment->user->id == Auth::user()->id) 
          <span class="text-success" style="font-weight: bolder"> You : </span>
        @else<span class="text-primary fw-bold">{{$comment->user->name}}</span>
           :  
        @endif
           {{$comment->comment}}
           @can('update-comment', $comment)
                    <a href="{{ route('comments.edit', $comment) }}"><i
                            class="fa-solid fa-pen-to-square"></i></a>
                    <form action="{{ route('comments.destroy', $comment) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="background: none; border:none" class="text-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                @endcan
        </li>
        @endforeach 
      </ol>
    </div>
  </div> --}} 
  <div class="left-side">
    <div class="container-left">
        <div class="profil-img-name">
            <img class="profile-img" src="{{asset('storage/profile-pictures/'.$post->user->profile)}}" alt="">
            <span>{{$post->user->name}}</span>
        </div>
        <hr class="first">
        <div class="post">
            <img class="post-img" src="{{asset('storage/posts-media/'.$post->media)}}" alt="">
            <hr class="second">
            <br>
            <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus, aperiam alias omnis ratione in maiores fuga distinctio ex repellat nemo laboriosam fugit commodi consequuntur expedita, cumque esse officiis nostrum! Quibusdam?</div>
        </div>
    </div>
</div>
<hr class="third">
<div class="right-side">
    <div class="comment-nav">
        <i class="fa-solid fa-magnifying-glass" style="color: #000000;"></i>  
        comments 
        <i class="fa-solid fa-arrow-right" style="color: #000000;"></i>
    </div>
    <hr class="forth">
    <form action="">
        <div class="comment">
            <label for="com" >Comment :</label>
            <input type="text" id="com">  
            <button><i class="fa-solid fa-dove" style="color: #000000;"></i></button>
        </div>
    </form>
    <hr class="fifth">
   <ul class="comment-list">
     <li><div class="profil-img-name"><img class="profile-img"  src="../images/male.png" alt=""><span>ahmad alahmad</span></div><div class="comm">i like your comment i like your comment i like your comment</div></li>
   </ul>
</div>
@vite('public/js/custom1.js')
@endsection