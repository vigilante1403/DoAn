@extends('admin.home')
@php
$title_header="Them nguoi dung"
@endphp
@section('content')
<form method="post" href="">
    @csrf
    <div class="card-body">
        @include('admin.alert')
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" id="username" placeholder="Enter username" name="name">
          </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" >
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" >
      </div>
      <div class="col-sm-6">
        <!-- radio -->
        <div class="form-group">
            <label for="authorize">Phan quyen</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="authorize" value="1">
            <label class="form-check-label">Admin</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="authorize" checked="" value="0">
            <label class="form-check-label">User</label>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection