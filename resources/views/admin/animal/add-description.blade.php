@extends('admin.home')
@php
$title_header="Add animal description"
@endphp

@section('content')
<link rel="stylesheet" href="{{ asset('css/lib/detail_post.css') }}">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="post-content">
              <img src="{{ asset($animal->img_path) }}" alt="post-image" class="img-responsive post-image" width="300" height="300">
              <div class="post-container">
                <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="user" class="profile-photo-md pull-left">
                <div class="post-detail">
                  <div class="user-info">
                    <h5><a href="timeline.html" class="profile-link">{{ $animal->name }}</a> <span class="following">following</span></h5>
                    <p class="text-muted">Published a photo about 3 mins ago</p>
                  </div>
                    <form method="post" action="">
                        @csrf
                        <div class="form-group">
                            <label for="">Beard-Colors:</label>
                            <input type="text" class="form-control" name="beard_colors" >
                            <input type="hidden" class="form-control" name="name_animal" value="{{ $animal->name }}">
                        </div>
                        <div class="form-group">
                            <label for="">Weight:</label>
                            <input type="text" class="form-control" name="weight" >
                        </div>
                        <div class="form-group">
                            <label for="">Personality Traits:</label>
                            <textarea name="personality_traits" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Fact:</label>
                            <textarea name="fact" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Favorite Items:</label>
                            <textarea name="favorite_items" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Related To:</label>
                            <textarea name="related_to" class="form-control" id="" cols="30" rows="10"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-info" value="Submit" />
                        </div>
                    </form>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection