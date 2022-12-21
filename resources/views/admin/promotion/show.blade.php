@extends('admin.home')
@php
$title_header="Show promotions";
@endphp
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
@section('content')

<div class="container promotion">
  	
    <div class="row mt-4">
        @foreach($promotions as $promotion)
     <div class="col-sm-3.5" style="margin-left:30px; " >
         <figure class="card  card-lg border-0" style="border:none!important;" >
             <a href="#" class="img-wrap card-img-top" data-abc="true"><img width="262px"  src="{{ asset($promotion->img_path) }}"></a>
             <figcaption class="info-wrap border-0">
                        <div class="row">
 
                            <div class="container mt-4 border-0"style="text-align:center ">
 
                                <strong><a href="#" class="title" data-abc="true" style="font-size:20px;color:#2596be">{{ $promotion->name }}</a></strong>
                                <div class="price-wrap container mt-2">
                                    <span class="price h5">${{ $promotion->price }}</span> <br> 
                                </div>
                                <div class="bottom-wrap container mt-4" style="background-color:">
                                    <a href="" style="text-decoration: none;">
                                    <input type="button" value="Add to cart" style="background-color: #2596be;border:none;color:white;height:54px;width:150.64px;font-weight:bold;font-size:20px">
                                    </a>
                                </div>
                            </div>
 
             </figcaption>
              
         </figure>
     </div>
 @endforeach
 </div>
   </div>

@endsection