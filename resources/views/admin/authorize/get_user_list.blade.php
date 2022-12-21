@extends('admin.home')
@php
$title_header="Quan li danh sach User"
@endphp

@section('content')
<div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Danh sach tai khoan</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            @include('admin.alert')
            <tr>
              <th>ID</th>
              <th>User</th>
              <th>Email</th>
              <th>Authorize</th>
              <th>Edit/Delete</th>
              <th>Active</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $user)
            <tr>
              <td>{{$user->id  }}</td>
              <td>{{ $user->name }}</td>
              <td>{{ $user->email }}</td>
              <td><span class="tag tag-success">{{ $user->authorize }}</span></td>
              <td><button type="submit" class="btn btn-secondary"><a href="edit/{{ $user->id }}" style="color:white;text-decoration:none;">Edit</a></button>
                <button type="submit" class="btn btn-dark"><a href="delete/{{ $user->id }}" style="color:white;text-decoration:none;">Delete</a></button></td>
              @if(!$user->blocked_at&&$user->authorize!=1)
              <td><button type="submit" class="btn btn-danger"><a href="block/{{ $user->id }}" style="color:white;text-decoration:none;">Block</a></button></td>
              @elseif($user->authorize!=1)
              <td><button type="submit" class="btn btn-warning"><a href="unblock/{{ $user->id }}" style="color:white;text-decoration:none;">Unblock</a></button></td>
              @endif
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
@endsection