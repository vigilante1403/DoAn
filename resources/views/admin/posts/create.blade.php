@extends('admin.home')
@php
$title_header="Them bai viet"
@endphp
{{-- <script src="{{ URL::asset('js/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('editor1');
</script> --}}
@section('content')
<form method="post" href="" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        @include('admin.alert')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="title">
          </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Keyword</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter keyword" name="keyword" >
      </div>
      
        <!-- textarea -->
       
        <div class="form-group">
          <label>Description</label>
          <textarea class="form-control ckeditor" id="editor1" rows="2" placeholder="Enter ..." name="body"></textarea>
        </div>
        
        <input type="file" name="photo">
          </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
@endsection
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script>
