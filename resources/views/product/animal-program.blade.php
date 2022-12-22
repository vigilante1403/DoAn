@extends('master')
<style>
    .title-product h1, h2{
        font-family: 'Oswald', Helvetica, Arial, sans-serif;
        font-weight: 700!important;
        line-height: 1.236;
        margin: 0 0 0.618em;
        font-size: 2em;
    }
    .woocommerce .quantity .qty {
    line-height: 1.5;
    margin-right: 5px;
    padding: 0.5em 1em;
    width: 70px!important;
    display:block;
    
}
.product li{
    display:inline-block!important;
}
a:hover{
    color:black!important;
}
.responsive img{
    width:100%;
    height:auto;
}
</style>

@section('main')
<div class="container">
        @php
            $filename=$program[0]->filenames;
            $filename=str_replace(array('"','[',']'),'',$filename);
            $filename=explode(',',$filename);
            // $count=count($filename);
            $img_to_present=$filename[0];
            @endphp
<div class="row promotion">
    <div class="col-md-7" style="">
        <div class="img mt-5" style="" >
            <img width="600" height="400px" class="" src="{{ asset('program/'.$img_to_present) }}" alt="">
        </div>
        
    </div>
    <div class="col-md-5" style="">
        <div class="over-view " style="">
            <div class="title-product mt-5">
                <h1>Animal Programs:&nbsp{{ $program[0]->program_name }}</h1>
            </div>
            
            <div class="description col-md-12" style="line-height: 20px;" >
                <br>
                @if($program[0]->program_name=='The Scoop on Sloths')
	<p><strong>{{ $program[0]->program_name }}</strong></p>
    <br>
<p>Did you know that two-toed sloths spend most of their lives hanging upside down from trees? Meet Wally and find out why they do that and more!
</p>
<br>
<p>Limited amount of participants. Ages 5 and up only.  Price of program includes general admission for the day.</p>
<br>
<p>$30 Adults (13 years and up)</p>
<p>$20 Children (Ages 5 – 12)</p>
<br>
<p>
    To book your spot for Scoop on Sloths, please select the number of children and adults in your party, then select the date on the calendar below. Available dates are shown in green. Payment is required at booking.  No Refunds.
</p>
<p>Participants who need to reschedule may do so by contacting education@jenkinsons.com.</p>
<br>
<i><p>All participants must wear a mask/facial covering during the program.</p></i>
<br>
<p><strong>Upcoming Dates:</strong></p>
<br>
<p>Thursday, December 8th 5:00-5:30pm</p>
@else 
<p><strong>{{ $program[0]->program_name }}</strong></p>
<br>
<p>Junior Keepers is a great program for those future marine biologists! Come experience the aquarium from an employee’s point of view.  Learn how to provide animal care, training, enrichment, and feeding to a variety of animals.
</p>

<p>You’ll go behind the scenes, meet live animals, and talk with our care staff.  Junior Keepers are required to wear sneakers.  Space is limited.</p>
<br>
<p>$90 per child. Ages 9-12 only. 8am – 11am. General admission for the day included.</p>
<br>
<p>Friday, November 11, 2022</p>
<br>
<p>To book your spot for Junior Keepers, please select 1 child below then select the date on the calendar you would like to visit. Available dates are shown in green on the calendar. Fill out Keeper’s Name and Birthdate and select Book Now.  If you are registering multiple children you can click on continue shopping from your cart. No Refunds. General admission for the day included. Payment is required at booking.  No Refunds. Any questions please contact
</p>
<p>education@jenkinsons.com.</p>
<br>
</div>
@endif
        </div>
        <div class="form" style="margin-top:30px;">
            <form class="cart " action="https://jenkinsons.com/aquarium/product/buy-5-get-1-free-adult-admissions/" method="post" enctype='multipart/form-data'>
                <input type="hidden" class="tm-epo-counter" name="tm-epo-counter" value="1" /><input type="hidden" class="tc-add-to-cart" name="tcaddtocart" value="8851" />
                    <div class="quantity">
                
                <input type="number" min="1" max="" value="1"style="width:70px;height:50px;padding:28px;border:0.1rem solid #f0f1f2;">
                <button type="submit" name="add-to-cart" style="margin-left:50px;" value="8851" class="single_add_to_cart_button button alt wp-element-button">BOOK NOW</button>
                    </div>
            
                
            
                    </form>
                    <div class="category" style="margin-top:30px;">
                    <span class="posted_in" >Category: <a href="/services/adopt-an-animal" style="text-decoration: none;color:#2596be" rel="tag">Adopt-An-Animal</a>, <a style="text-decoration: none;color:#2596be" href="/services/adopt-an-animal">Penguins</a></span>
                </div>
                </div>
    </div>
</div>

@if($program[0]->program_name=="The Scoop on Sloths")
<div class="row">
    <div class="prefer title-product"><h2>You may also like&hellip;</h2></div>
</div>

  	
    <div class="row mt-2">
        
     <div class="col-sm-3" style="margin-right:0px; margin-bottom:40px; " >
         <figure class="card card-lg border-0" style="border:none!important;" >
             <a href="/product/wally-th-sloth/{{ $animal[0]->id }}" class="img-wrap card-img-top" data-abc="true"><img width="250px" height="275"  src="{{ asset($animal[0]->img_path) }}"></a>
             <figcaption class="info-wrap border-0">
                        <div class="row">
 
                            <div class="container mt-4 border-0"style="text-align:center ">
 
                                <strong><a href="/product/wally-th-sloth/{{ $animal[0]->id }}" class="title" data-abc="true" style="font-size:20px;color:#2596be;text-decoration:none">{{ $animal[0]->name }}</a></strong>
                                <div class="price-wrap container mt-2">
                                    <span class="price h5">${{ $animal[0]->price }}</span> <br> 
                                </div>
                                <div class="bottom-wrap container mt-4" style="background-color:">
                                    <a href="addInfo/" style="text-decoration: none;">
                                    <input type="button" style="text-align:center" value="Adopt Me" style="background-color: #2596be;border:none;color:white;height:54px;width:150.64px;font-weight:bold;font-size:20px">
                                    </a>
                                </div>
                            </div>
 
             </figcaption>
              
         </figure>
     </div>
    </div>
@else
<div class="row">
    <div class="prefer title-product"><h2>You may also like&hellip;</h2></div>
</div>

<div class="row mt-2">
        @foreach($animals as $animal)
        @php
                $name=strtolower($animal->name);
                $data=explode(" ",$name);
                $name=implode('-',$data);
              @endphp
    <div class="col-sm-3" style="margin-right:0px; margin-bottom:40px; " >
        <figure class="card card-lg border-0" style="border:none!important;" >
            <a href="/product/{{ $name }}/{{ $animal->id }}" class="img-wrap card-img-top" data-abc="true"><img width="250px" height="275"  src="{{ asset($animal->img_path) }}"></a>
            <figcaption class="info-wrap border-0">
                       <div class="row">

                           <div class="container mt-4 border-0"style="text-align:center ">

                               <strong><a href="/product/{{ $name }}/{{ $animal->id }}" class="title" data-abc="true" style="font-size:20px;color:#2596be;text-decoration:none">{{ $animal->name }}</a></strong>
                               <div class="price-wrap container mt-2">
                                   <span class="price h5">${{ $animal->price }}</span> <br> 
                               </div>
                               <div class="bottom-wrap container mt-4" style="background-color:">
                                   <a href="addInfo/" style="text-decoration: none;">
                                   <input type="button" style="text-align:center" value="Adopt Me" style="background-color: #2596be;border:none;color:white;height:54px;width:150.64px;font-weight:bold;font-size:20px">
                                   </a>
                               </div>
                           </div>

            </figcaption>
             
        </figure>
    </div>
            @endforeach
   </div>
@endif
</div>
@if($program[0]->program_name=='The Scoop on Sloths')
<div class=" adopt-an-animal" style="background-color: azure;">
    <div class="container">
    <div class="row">
        <div class="prefer title-product"><h2>Related Products</h2></div>
    </div>
    <div class="row mt-2">
        
        @php
            $filename=$related[0]->filenames;
        $filename=str_replace(array('"','[',']'),'',$filename);
        $filename=explode(',',$filename);
        // $count=count($filename);
        $img_to_present=$filename[0];
            @endphp
     <div class="col-sm-3" style="margin-right:0px; margin-bottom:40px; "  >
         <figure class="card card-lg border-0" style="border:none!important;" >
             <a href="/product/animal-program-junior-keepers-9-12-years-old" class="img-wrap card-img-top" data-abc="true"><img width="262px" height="275"  src="{{ asset('program/'.$img_to_present) }}"></a>
             <figcaption class="info-wrap border-0">
                        
 
                            <div class="col-md-12 mt-4" style="text-align:center ">
 
                                <strong><a href="/product/animal-program-junior-keepers-9-12-years-old" class="title" data-abc="true" style="font-size:20px;color:#2596be;text-decoration:none">Animal Program: {{ $related[0]->program_name }}</a></strong>

                                <div class="bottom-wrap container mt-4" style="background-color:">
                                    <a href="" style="text-decoration: none;">
                                    <input type="button" style="text-align:center" value="BOOK NOW" style="background-color: #2596be;border:none;color:white;height:54px;width:150.64px;font-weight:bold;font-size:20px">
                                    </a>
                                </div>
                            </div>
 
             </figcaption>
              
         </figure>
    </div>
    @php
            $filename=$encounter[0]->filenames;
        $filename=str_replace(array('"','[',']'),'',$filename);
        $filename=explode(',',$filename);
        // $count=count($filename);
        $img_to_present=$filename[0];
            @endphp
    <div class="col-sm-3" style="margin-right:0px; margin-bottom:40px; "  >
        <figure class="card card-lg border-0" style="border:none!important;" >
            <a href="/product/sloth-encounters" class="img-wrap card-img-top" data-abc="true"><img width="262px" height="275"  src="{{ asset('encounter/'.$img_to_present) }}"></a>
            <figcaption class="info-wrap border-0">
                       

                           <div class="col-md-12 mt-4" style="text-align:center ">

                               <strong><a href="/product/sloth-encounters" class="title" data-abc="true" style="font-size:20px;color:#2596be;text-decoration:none">Encounters: {{ $encounter[0]->animal_name }}</a></strong>
                               <div class="price-wrap container mt-2">
                                <span class="price h5">From: ${{ $encounter[0]->price }}</span> <br> 
                                </div>
                               <div class="bottom-wrap container mt-4" style="background-color:">
                                   <a href="" style="text-decoration: none;">
                                   <input type="button" style="text-align:center" value="BOOK NOW" style="background-color: #2596be;border:none;color:white;height:54px;width:150.64px;font-weight:bold;font-size:20px">
                                   </a>
                               </div>
                           </div>

            </figcaption>
             
        </figure>
   </div>
     </div> 
    </div>
@else
    <div class="adopt-an-animal" style="background-color: azure;">
        <div class="container">
        <div class="row">
            <div class="prefer title-product"><h2>Related Products</h2></div>
        </div>
        <div class="row mt-2">
            @php
            $filename=$related[0]->filenames;
            $filename=str_replace(array('"','[',']'),'',$filename);
            $filename=explode(',',$filename);
            // $count=count($filename);
            $img_to_present=$filename[0];
            @endphp
         <div class="col-sm-3" style="margin-right:0px; margin-bottom:40px; "  >
            <figure class="card card-lg border-0" style="border:none!important;" >
                <a href="/product/animal-program-the-scoop-on-sloths" class="img-wrap card-img-top" data-abc="true"><img width="262px" height="275"  src="{{ asset('program/'.$img_to_present) }}"></a>
                <figcaption class="info-wrap border-0">
                           
    
                               <div class="col-md-12 mt-4" style="text-align:center ">
    
                                   <strong><a href="/product/animal-program-the-scoop-on-sloths" class="title" data-abc="true" style="font-size:20px;color:#2596be;text-decoration:none">Animal Program: {{ $related[0]->program_name }}</a></strong>
   
                                   <div class="bottom-wrap container mt-4" >
                                       <a href="" style="text-decoration: none;">
                                       <input type="button" style="text-align:center" value="BOOK NOW" style="background-color: #2596be;border:none;color:white;height:54px;width:150.64px;font-weight:bold;font-size:20px">
                                       </a>
                                   </div>
                               </div>
    
                </figcaption>
                 
            </figure>
       </div>
        </div>
    </div>
 </div>
@endif
@endsection
