@extends('layouts.app')
@section('content')
<div id="card">
</div>
    @foreach ($posts as $post)
    <div id="card<?php echo $post->id?>" class="d-inline-block w-25 ">
    <div class="card ms-3 mb-3" >
            <div class="card-header text-center">
               <a href="{{route('profile',$post)}}" class="text-decoration-none text-black"> <span class="fw-bold"> <img src="{{asset('storage/profile-pictures/'.$post->user->profile)}}" alt="" class="rounded-circle" style="width:20px;height:20px"> {{ $post->user->name }}</span>'s Post</a>
            </div>
            <div class="card-body" style="background-color: #dfe6e9" id="card-update">
                <img src="{{asset('storage/posts-media/'. $post->media)}}" alt="{{$post->media}}" class="w-100 rounded">
                <p class="card-text">{{ $post->content }}</p>
                <hr>
                <a href="" class="btn btn-outline-success"><i class="fa-solid fa-heart"></i></a>
                <a href="{{ route('posts.show', $post) }}" class="btn btn-outline-secondary"><i
                        class="fa-solid fa-comment"></i></a>
                @can('update-post', $post)
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-outline-primary"><i
                            class="fa-solid fa-pen-to-square"></i></a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button>
                    </form>
                @endcan
                <div id="comment-count">
                    Comments : {{ $post->comments->count() }} -
                    Like :
                </div>
            </div>
        </div>
    </div>
    @endforeach
    @vite('public/js/custom.js')
    @vite('public/js/deletePost.js')
    @vite('public/js/updatePost.js')
    {{-- @vite('public/js/custom1.js') --}}
@endsection
