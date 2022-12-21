@extends('master')
<link rel="stylesheet" href="{{ asset('css/lib/show_post.css') }}">
@section('main')

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="people-nearby">
              @foreach($posts as $post)
              <div class="nearby-user">
                <div class="row">
                  <div class="col-md-2 col-sm-2">
                    <img src="{{ asset($post->img) }}" alt="user" class="profile-photo-lg">
                  </div>
                  <div class="col-md-7 col-sm-7">
                    <h5><a href="#" class="profile-link">{{ $post->title }}</a></h5>
                    <p>{!! $post->body !!}</p>
                    <p class="text-muted">{{ $post->keyword }}</p>
                  </div>
                  <div class="col-md-3 col-sm-3">
                    <button class="btn btn-primary pull-right"><a href="news/{{ $post->id }}" style="color:white;text-decoration:none">Xem chi tiet</a></button>
                    
                  </div>
                  
                </div>
              </div>
              @endforeach

            </div>
    	</div>
	</div>
</div>
@endsection