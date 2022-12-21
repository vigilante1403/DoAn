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
            $filename=$encounter[0]->filenames;
            $filename=str_replace(array('"','[',']'),'',$filename);
            $filename=explode(',',$filename);
            // $count=count($filename);
            $img_to_present=$filename[0];
            @endphp
<div class="row promotion">
    <div class="col-md-7" style="">
        <div class="img mt-5" style="" >
            <img width="600" height="400px" class="" src="{{ asset('encounter/'.$img_to_present) }}" alt="">
        </div>
        
    </div>
    <div class="col-md-5" style="">
        <div class="over-view " style="">
            <div class="title-product mt-5">
                <h1>Encounters:&nbsp{{ $encounter[0]->animal_name }}</h1>
            </div>
            <div class="product-price">
                <p class="price">
                             <ins><span class="woocommerce-Price-amount amount"><bdi>
                                <span class="woocommerce-Price-currencySymbol">From: &#36;</span>{{ $encounter[0]->price }}</bdi></span></ins></p>
            </div>
            <div class="description col-md-12" style="line-height: 20px;" >
                <br>
                @if($encounter[0]->animal_name=='Penguin')
	<strong><p>Penguin Encounter</p></strong>
<p>During this 30 minute experience, you’ll be able to meet on of our African Penguins (from a safe 6ft distance of course) and see how our keepers are able to work with them on a daily basis. Learn what they eat, what their favorite enrichment is and so much more! Don’t forget your camera (or phone), these photos are something you will love to look back at! Whether you are looking for the perfect gift or looking to treat yourself, our animal encounters are truly unique and fun.
</p>
<br><br>
<p>Price: $100 per person (ages 7 and up)</p>
<br><br>
<p>Reservations:</p>
<p>
    To reserve your spot for our Penguin Encounter, please select the number of adults and number of children in your party below then select the date on the calendar you would like to visit. Available dates are shown in green on the calendar. No refunds.
</p>
<br>
<p>All participants must wear a mask/facial covering during the program.</p>
@else 
<strong><p>Sloth Encounter</p></strong>
<br><br>
<p>Join us for a one of a kind experience! Meet Wally, our two-toed sloth, while learning all about him from the keepers who know him best!
</p>
<br>
<p>During this 30 minute experience, you’ll be able to see Wally (from a safe 6ft distance of course) and see how our keepers are able to work with him on a daily basis. Learn what he eats, what his favorite enrichment is, how long he sleeps for and so much more! Don’t forget your camera (or phone), these photos are something you will love to look back at! Whether you are looking for the perfect gift or looking to treat yourself, our animal encounters are truly unique and fun.</p>
<br><br>
<p>Price: $100 per person (ages 7 and up)</p>
<br><br>
<p>Reservations:</p>
<p>
    To reserve your spot for our Sloth Encounter, please select the number of adults and number of children in your party below then select the date on the calendar you would like to visit. Available dates are shown in green on the calendar. No refunds.
</p>
<br>
<p>All participants must wear a mask/facial covering during the program.</p>
    <br>
    <br><br><br><br>
  <p>discount coupon for an animal encounter</p>
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

@if($encounter[0]->animal_name=="Sloth")
<div class="row">
    <div class="prefer title-product"><h2>You may also like&hellip;</h2></div>
</div>

  	
    <div class="row mt-2">
        
     <div class="col-sm-3" style="margin-right:0px; margin-bottom:40px; " >
         <figure class="card card-lg border-0" style="border:none!important;" >
             <a href="#" class="img-wrap card-img-top" data-abc="true"><img width="250px" height="275"  src="{{ asset($animal[0]->img_path) }}"></a>
             <figcaption class="info-wrap border-0">
                        <div class="row">
 
                            <div class="container mt-4 border-0"style="text-align:center ">
 
                                <strong><a href="#" class="title" data-abc="true" style="font-size:20px;color:#2596be;text-decoration:none">{{ $animal[0]->name }}</a></strong>
                                <div class="price-wrap container mt-2">
                                    <span class="price h5"></span> <br> 
                                </div>
                                <div class="bottom-wrap container mt-4" style="background-color:">
                                    <a href="addInfo/" style="text-decoration: none;">
                                    <input type="button" value="Adopt Me" style="background-color: #2596be;border:none;color:white;height:54px;width:150.64px;font-weight:bold;font-size:20px">
                                    </a>
                                </div>
                            </div>
 
             </figcaption>
              
         </figure>
     </div>
    </div>
@endif
</div>
@if($encounter[0]->animal_name=='Sloth')
<div class=" adopt-an-animal" style="background-color: azure;">
    <div class="container">
    <div class="row">
        <div class="prefer title-product"><h2>Related Products</h2></div>
    </div>
    <div class="row mt-2">
        
        @php
            $filename=$data_related[0]->filenames;
        $filename=str_replace(array('"','[',']'),'',$filename);
        $filename=explode(',',$filename);
        // $count=count($filename);
        $img_to_present=$filename[0];
            @endphp
     <div class="col-sm-3" style="margin-right:0px; margin-bottom:40px; "  >
         <figure class="card card-lg border-0" style="border:none!important;" >
             <a href="/product/penguin-encounters" class="img-wrap card-img-top" data-abc="true"><img width="262px" height="275"  src="{{ asset('encounter/'.$img_to_present) }}"></a>
             <figcaption class="info-wrap border-0">
                        
 
                            <div class="col-md-12 mt-4" style="text-align:center ">
 
                                <strong><a href="#" class="title" data-abc="true" style="font-size:20px;color:#2596be;text-decoration:none">Encounters: {{ $data_related[0]->animal_name }}</a></strong>
                                <div class="price-wrap container mt-2">
                                    <span class="price h5">From: ${{ $data_related[0]->price }}</span> <br> 
                                </div>
                            
                                <div class="bottom-wrap container mt-4" style="background-color:">
                                    <a href="" style="text-decoration: none;">
                                    <input type="button" value="BOOK NOW" style="background-color: #2596be;border:none;color:white;height:54px;width:150.64px;font-weight:bold;font-size:20px">
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
            
            @foreach($animals as $related_data)
            @php
            $name_product=strtolower($related_data->name);
            $data=explode(" ",$name_product);
            $name_product=implode('-',$data);
            @endphp
         <div class="col-sm-3" style="margin-right:0px; margin-bottom:40px; "  >
             <figure class="card card-lg border-0" style="border:none!important;" >
                 <a href="/product/{{ $name_product }}/{{ $related_data->id }}" class="img-wrap card-img-top" data-abc="true"><img width="262px" height="275"  src="{{ asset($related_data->img_path) }}"></a>
                 <figcaption class="info-wrap border-0">
                            
     
                                <div class="col-md-12 mt-4 border-0"style="text-align:center ">
     
                                    <strong><a href="#" class="title" data-abc="true" style="font-size:20px;color:#2596be;text-decoration:none">{{ $related_data->name }}</a></strong>
                                    <div class="price-wrap container mt-2">
                                        <span class="price h5">${{ $related_data->price }}</span> <br> 
                                    </div>
                                
                                    <div class="bottom-wrap container mt-4" style="background-color:">
                                        <a href="" style="text-decoration: none;">
                                        <input type="button" value="Adopt Me" style="background-color: #2596be;border:none;color:white;height:54px;width:150.64px;font-weight:bold;font-size:20px">
                                        </a>
                                    </div>
                                </div>
                 </figcaption>
                  
             </figure>
         </div>
     @endforeach
        </div>
    </div>
 </div>
@endif
@endsection
