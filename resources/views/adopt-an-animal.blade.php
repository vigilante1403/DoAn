@extends('master')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@section('main')
<div class="over-view container" style="text-align:center;padding-top:20vh;padding-bottom:20vh;">
    <img src="https://jenkinsons.com/aquarium/wp-content/uploads/sites/2/2020/09/E75_8245-1.jpg" alt="" width="300" height="200">
    <span class="" style="display:block;font-size:23px;color:black;">
        Did you know you can Adopt An Animal from Jenkinson's Aquarium? Choose from Penguins, Sloth, Seals, Sharks or Sea Turtle - each kit comes with a plush animal, adoption certificate, photo and 2 aquarium passes.! We can not guarantee delivery before Christmas.   			</span>
</div>
       
<div class="container adopt-an-animal">
  	
    <div class="row mt-2">
        @foreach($animals as $animal)
        @php
        $name_product=strtolower($animal->name);
        $data=explode(" ",$name_product);
        $name_product=implode('-',$data);
        @endphp
     <div class="col-sm-3" style="margin-right:0px; margin-bottom:40px; " >
         <figure class="card card-lg border-0" style="border:none!important;" >
             <a href="/product/{{ $name_product }}/{{ $animal->id }}" class="img-wrap card-img-top" data-abc="true"><img width="250px" height="275"  src="{{ asset($animal->img_path) }}"></a>
             <figcaption class="info-wrap border-0">
                        
 
                            <div class="container mt-4 border-0"style="text-align:center ">
 
                                <strong><a href="#" class="title" data-abc="true" style="font-size:20px;color:#2596be;text-decoration:none">{{ $animal->name }}</a></strong>
                                <div class="price-wrap container mt-2">
                                    <span class="price h5">${{ $animal->price }}</span> <br> 
                                </div>
                                <div class="bottom-wrap container mt-4" style="background-color:">
                                    <a href="" style="text-decoration: none;">
                                    <input type="button" style="text-align:center" value="Adopt Me" style="background-color: #2596be;border:none;color:white;height:54px;width:150.64px;font-weight:bold;font-size:20px">
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