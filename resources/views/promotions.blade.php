@extends('master')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@section('main')
<div class="over-view container" style="text-align:center;padding-top:20vh;padding-bottom:20vh;">
    <img src="https://jenkinsons.com/aquarium/wp-content/uploads/sites/2/2020/10/penguin-2.jpg" alt="" width="300" height="200">
    <span class="" style="display:block;font-size:23px;color:black;">
        Be sure to check back often, you never know when we'll add a new offer!</span>
</div>

<div class="container adopt-an-animal">
  	
    <div class="row mt-2">
        @foreach($promotions as $promotion)
        @php
        if($promotion->name=="Adult Admissions"){
            $name_product="adult-admissions";
        } else {
            $name_product="child-admissions";
        }
        @endphp
     <div class="col-sm-3" style="margin-right:0px; margin-bottom:40px; " >
         <figure class="card card-lg border-0" style="border:none!important;" >
             <a href="/product/buy-5-get-1-free-{{ $name_product }}" class="img-wrap card-img-top" data-abc="true"><img width="250px" height="275"  src="{{ asset($promotion->img_path) }}"></a>
             <figcaption class="info-wrap border-0">
                        <div class="row">
 
                            <div class="container mt-4 border-0"style="text-align:center ">
 
                                <strong><a href="#" class="title" data-abc="true" style="font-size:20px;color:#2596be;text-decoration:none">{{ $promotion->name }}</a></strong>
                                <div class="price-wrap container mt-2">
                                    <span class="price h5">${{ $promotion->price }}</span> <br> 
                                </div>
                                <div class="bottom-wrap container mt-4" >
                                    <a href="" style="text-decoration: none;">
                                    <input type="button" value="Add to cart" style="background-color: #2596be;border:none;color:white;height:54px;width:150.64px;font-weight:bold;font-size:20px;">
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