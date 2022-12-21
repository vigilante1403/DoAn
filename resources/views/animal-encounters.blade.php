@extends('master')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@section('main')
<div class="over-view container" style="text-align:center;padding-top:20vh;padding-bottom:20vh;">
    <img src="https://jenkinsons.com/aquarium/wp-content/uploads/sites/2/2020/10/wally-and-penguin.jpg" alt="" width="300" height="200">
    <span class="" style="display:block;font-size:23px;color:black;">
        Join us for a one of a kind experience! You’ll be able to meet (from a safe 6 foot distance of course) one of our animals and see how our keepers are able to work with them on a daily basis. Learn what they eat, what their favorite enrichment is and so much more! Whether you are looking for the perfect gift or looking to treat yourself, our animal encounters are truly unique and fun. Click on one of our Animal Encounters for more information including online booking, available dates & times and more!</span>
</div>

<div class="container program">
  	
    <div class="row mt-4">
        @foreach($encounters as $encounter)
     <div class="col-sm-3" style="margin-left:10px; margin-right:50px; " >
         <figure class="card  card-lg border-0" style="border:none!important;" >
            @php
            $filename=$encounter->filenames;
        $filename=str_replace(array('"','[',']'),'',$filename);
        $filename=explode(',',$filename);
        // $count=count($filename);
        $img_to_present=$filename[0];
            @endphp
            @if($encounter->animal_name=="Penguin")
             <a href="/product/penguin-encounters" class="img-wrap card-img-top" data-abc="true">
            @else
            <a href="/product/sloth-encounters" class="img-wrap card-img-top" data-abc="true">
            @endif   
                <img width="300px" height="250"  src="{{ asset('encounter/'.$img_to_present) }}"></a>
             <figcaption class="info-wrap border-0">
                        <div class="row">
 
                            <div class="container mt-4 border-0"style="text-align:center ">
 
                                <strong><a href="/product/penguin-encounters" class="title" data-abc="true" style="font-size:20px;color:#2596be;text-decoration:none">Encounters:&nbsp{{ $encounter->animal_name }}</a></strong>
                                <div class="price-wrap container mt-2">
                                    <span class="price h5">From:&nbsp${{ $encounter->price }}</span> <br> 
                                </div>
                                <div class="bottom-wrap container mt-4" style="background-color:">
                                    <a href="" style="text-decoration: none;">
                                    <input type="button" value="Book Now" style="background-color: #2596be;border:none;color:white;height:54px;width:150.64px;font-weight:bold;font-size:20px">
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