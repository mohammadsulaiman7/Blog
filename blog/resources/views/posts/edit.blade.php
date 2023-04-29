@extends('layouts.app')
@section('content')
<form action="{{route('posts.update',$post)}}" method="POST" class="w-75 text-center ms-auto me-auto">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Post content</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="10" required name="content">{{$post->content}}</textarea>
  </div>
  <div class="mb-3">
    <label for="image" class="form-label">Update your post image</label>
    <input class="form-control" type="file" id="image" name="media">
  </div>
  <div>
    <img src="" alt="" id="imgPreview"  class="mb-4 mt-4">
  </div>
  <button type="submit" class="btn btn-outline-warning w-25">Update</button>
</form>
<script>
  $(document).ready(() => {
      $('#image').change(function() {
          const file = this.files[0];
          console.log(file);
          if (file) {
              let reader = new FileReader();
              reader.onload = function(event) {
                  console.log(event.target.result);
                  $('#imgPreview').attr('src', event.target.result);
              }
              reader.readAsDataURL(file);
          }
      });
  });
</script>
@endsection