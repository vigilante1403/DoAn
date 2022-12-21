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
</style>
@php
        if($related[0]->name=="Adult Admissions"){
            $name_product="adult-admissions";
        } else {
            $name_product="child-admissions";
        }
        @endphp
@section('main')
<div class="container">
<div class="row promotion">
    <div class="col-md-6" style="">
        <div class="img mt-5" style="" >
            <img width="" height="500px" class="" src="https://jenkinsons.com/aquarium/wp-content/uploads/sites/2/2020/11/LIMITED-TIME-OFFER.jpg" alt="">
        </div>
        
    </div>
    <div class="col-md-6" style="">
        <div class="over-view " style="">
            <div class="title-product mt-5">
                <h1>Buy 5 Get 1 FREE&nbsp-&nbsp{{ $promotion[0]->name}}</h1>
            </div>
            <div class="product-price">
                <p class="price">
                    <del aria-hidden="true">
                        <span class="woocommerce-Price-amount amount"><bdi>
                            <span class="woocommerce-Price-currencySymbol">&#36;</span>
                        @if(isset($promotion[0]->name)&&$promotion[0]->name=="Adult Admissions")
                        96
                        @else
                        60
                        @endif
                        </bdi></span></del>
                             <ins><span class="woocommerce-Price-amount amount"><bdi>
                                <span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $promotion[0]->price }}</bdi></span></ins></p>
            </div>
            <div class="description col-md-12 " >
	<p>Limited Time Offer!</p>
<p>Purchase 5 @if(isset($promotion[0]->name)&&$promotion[0]->name=="Adult Admissions")
    Adult
    @else
    Child
    @endif Jenkinson&#8217;s Aquarium admissions, get 1 @if(isset($promotion[0]->name)&&$promotion[0]->name=="Adult Admissions")
    Adult
    @else
    Child
    @endif admission free!</p>
<p>@if(isset($promotion[0]->name)&&$promotion[0]->name=="Adult Admissions")
    Adult
    @else
    Child
    @endif admission price: ${{ $promotion[0]->price }}.00 (@if(isset($promotion[0]->name)&&$promotion[0]->name=="Adult Admissions")
    $96
    @else
    $60
    @endif value, save @if(isset($promotion[0]->name)&&$promotion[0]->name=="Adult Admissions")
    $16
    @else
    $10
    @endif!)</p>
<p>Makes a great gift for the holidays, admission passes can be split up and given as gifts!</p>
<p>Holiday Shipping Deadline: Friday, December 10th</p>
<p>No refunds or exchanges, no cash value.<br />
Expiration date: 12/31/2023</p>
</div>

        </div>
        <div class="form" style="margin-top:30px;">
            <form class="cart " action="https://jenkinsons.com/aquarium/product/buy-5-get-1-free-adult-admissions/" method="post" enctype='multipart/form-data'>
                <input type="hidden" class="tm-epo-counter" name="tm-epo-counter" value="1" /><input type="hidden" class="tc-add-to-cart" name="tcaddtocart" value="8851" />
                    <div class="quantity">
                        
                {{-- <input
                    type="number"
                    id="quantity_639c320f70314"
                    class="input-text qty text"
                    step="1"
                    min="1"
                    max=""
                    name="quantity"
                    value="1"
                    title="Qty"
                    
                    placeholder=""
                    inputmode="numeric"
                    autocomplete="off"
                /> --}}
                <input type="number" min="1" max="" value="1"style="width:70px;height:50px;padding:28px;border:0.1rem solid #f0f1f2;">
                <button type="submit" name="add-to-cart" style="margin-left:50px;" value="8851" class="single_add_to_cart_button button alt wp-element-button">Add to cart</button>
                    </div>
            
                
            
                    </form>
                    <div class="category" style="margin-top:30px;">
                    <span class="posted_in" >Category: <a href="/services/promotions" rel="tag">Promotions</a></span>
                </div>
                </div>
    </div>
</div>
<div class="row">
    <div class="prefer title-product"><h2>You may also like&hellip;</h2></div>
</div>
{{-- <div class=" adopt-an-animal"> --}}
  	
    <div class="row mt-2">
        
     <div class="col-sm-3" style="margin-right:0px; margin-bottom:40px; " >
         <figure class="card card-lg border-0" style="border:none!important;" >
             <a href="#" class="img-wrap card-img-top" data-abc="true"><img width="250px" height="275"  src="{{ asset($animal->img_path) }}"></a>
             <figcaption class="info-wrap border-0">
                        <div class="row">
 
                            <div class="container mt-4 border-0"style="text-align:center ">
 
                                <strong><a href="#" class="title" data-abc="true" style="font-size:20px;color:#2596be;text-decoration:none">{{ $animal->name }}</a></strong>
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

     <div class="col-sm-3" style="margin-right:0px; margin-bottom:40px; " >
        <figure class="card card-lg border-0" style="border:none!important;" >
            @php
            $filename=$program->filenames;
        $filename=str_replace(array('"','[',']'),'',$filename);
        $filename=explode(',',$filename);
        // $count=count($filename);
        $img_to_present=$filename[0];
            @endphp
            <a href="#" class="img-wrap card-img-top" data-abc="true"><img width="250px" height="275"  src="{{ asset('program/'.$img_to_present) }}"></a>
            <figcaption class="info-wrap border-0">
                       <div class="row">

                           <div class="container mt-4 border-0"style="text-align:center ">

                               <strong><a href="#" class="title" data-abc="true" style="font-size:20px;color:#2596be;text-decoration:none">Animal Program:&nbsp{{ $program->program_name }}</a></strong>
                               <div class="price-wrap container mt-2">
                                   <span class="price h5"></span> <br> 
                               </div>
                               <div class="bottom-wrap container " style="margin-top:-10px;">
                                   <a href="addInfo/" style="text-decoration: none;">
                                   <input type="button" value="Book Now" style="background-color: #2596be;border:none;color:white;height:54px;width:150.64px;font-weight:bold;font-size:20px">
                                   </a>
                               </div>
                           </div>

            </figcaption>
             
        </figure>
    </div>
 
 </div>
   {{-- </div> --}}
   <div class="related-product">
        <div class="row">
            <div class="prefer title-product"><h2>Related Products</h2></div>
        </div>
        
    <div class="row">
        <div class="col-sm-3" style="margin-right:0px; margin-bottom:40px; " >
            <figure class="card card-lg border-0" style="border:none!important;" >
                <a href="/product/buy-5-get-1-free-{{ $name_product }}" class="img-wrap card-img-top" data-abc="true"><img width="250px" height="275"  src="https://jenkinsons.com/aquarium/wp-content/uploads/sites/2/2020/11/LIMITED-TIME-OFFER.jpg"></a>
                <figcaption class="info-wrap border-0">
                           <div class="row">
    
                               <div class="container mt-4 border-0"style="text-align:center ">
    
                                   <strong><a href="#" class="title" data-abc="true" style="font-size:20px;color:#2596be;text-decoration:none">Buy 5 Get 1 FREE&nbsp-&nbsp{{ $related[0]->name }}</a></strong>
                                   <div class="price-wrap container mt-2">
                                    <del aria-hidden="true">
                                        <span class="woocommerce-Price-amount amount"><bdi>
                                            <span class="woocommerce-Price-currencySymbol">&#36;</span>
                                        @if(isset($related[0]->name)&&$related[0]->name=="Adult Admissions")
                                        96
                                        @else
                                        60
                                        @endif
                                        </bdi></span></del>
                                       <span class="price h5">${{$related[0]->price  }}</span> <br> 
                                   </div>
                                   <div class="bottom-wrap container mt-4" style="background-color:">
                                       <a href="addInfo/" style="text-decoration: none;">
                                       <input type="button" value="Add to cart" style="background-color: #2596be;border:none;color:white;height:54px;width:150.64px;font-weight:bold;font-size:20px">
                                       </a>
                                   </div>
                               </div>
    
                </figcaption>
                 
            </figure>
        </div>
    </div>
</div>
</div>
@endsection