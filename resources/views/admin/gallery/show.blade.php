@extends('admin.home')

@php
$title_header='Exhibitions'
@endphp

@section('content')
    <!-- Gallery -->
<div class="row mt-4">
    @foreach($pictures as $picture)
    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
       
      <img
        src="{{ asset($picture->img) }}"
        class="w-100 shadow-1-strong rounded mb-4"
        alt="Boat on Calm Water"
      />
     <button class="btn btn-danger"><a href="delete/{{ $picture->id }}">Delete</a></button>
    </div>
    @endforeach
  </div>
  <!-- Gallery -->
@endsection