@extends('admin.home')

@php
$title_header="Adding Promotion"
@endphp

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>


@section('content')
<form method="post" href="" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
        @include('admin.alert')
        @error('image')
              <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
          @enderror
        <div class="form-group">
            <label for="title">Promotion Name</label>
            <input type="text" class="form-control" id="title" placeholder="Enter name" name="name">
          </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Price</label>
        <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter price" name="price" >
      </div>
      
        <!-- textarea -->
        <input type="file" name="photo" id="image">
          </div>
    </div>
    <!-- /.card-body -->
    <div class="col-md-12 mb-2">
        <img id="preview-image" src="https://melabiss.com/web/image/product.product/2483/image_1024"
            alt="preview image" style="max-height: 250px;">
    </div>
    <div class="card-footer">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
  <script type="text/javascript">
    $('#image').change(function(){
           
    let reader = new FileReader();
    reader.onload = (e) => { 
      $('#preview-image').attr('src', e.target.result); 
    }
    reader.readAsDataURL(this.files[0]); 
  
   });
  </script>
@endsection