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
{{-- @php
        if($related[0]->name=="Adult Admissions"){
            $name_product="adult-admissions";
        } else {
            $name_product="child-admissions";
        }
        @endphp --}}
@section('main')
<div class="container">
<div class="row promotion">
    <div class="col-md-6" style="">
        <div class="img mt-5" style="" >
            <img width="" height="500px" class="" src="{{ asset($animal->img_path) }}" alt="">
        </div>
        
    </div>
    <div class="col-md-6" style="">
        <div class="over-view " style="">
            <div class="title-product mt-5">
                <h1>{{ $animal->name }}</h1>
            </div>
            <div class="product-price">
                <p class="price">
                             <ins><span class="woocommerce-Price-amount amount"><bdi>
                                <span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $animal->price }}</bdi></span></ins></p>
            </div>
            <div class="description col-md-12" style="line-height: 5px;" >
	<p>Each Penguin Adoption Kit Includes:</p>
<p>penguin plush with matching ID band</p>
<p>personalized certificate</p>
<p>5×7 color photo of your penguin</p>
<p>personality card on your penguin</p>
<p>information packet </p>
<p>8×10 penguin foot painting</p>
<p>two complimentary passes to the aquarium </p>
    <br>
    <br><br><br><br>
  <p>discount coupon for an animal encounter</p>
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
                    <span class="posted_in" >Category: <a href="/services/adopt-an-animal" style="text-decoration: none;color:#2596be" rel="tag">Adopt-An-Animal</a>, <a style="text-decoration: none;color:#2596be" href="/services/adopt-an-animal">Penguins</a></span>
                </div>
                </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6" style="background-color:white"></div>
    <div class="col-md-6">
        <div class="over-view " style="">
            <div class="title-product mt-5">
                <h1>Description</h1>
            </div>
            
            <div class=" col-md-12 mt-5" style="color:black;font-size:20px;" >
                <ul>
                    <li>Beard Colors - {{ $data[0]->beard_colors }}</li>
                    <li>Weight - {{ $data[0]->weight }} pounds</li>
                    <li>Personality Traits - {{ $data[0]->personality_traits }}</li>
                    <li>Interesting Fact - {{ $data[0]->fact }}</li>
                    <li>Favorite enrichment toy/other item - {{ $data[0]->favorite_items }}</li>
                    <li>Related to - {{ $data[0]->related_to }}</li>
                </ul>
            </div>

        </div>
    </div>
</div>
</div>

<div class=" adopt-an-animal" style="background-color: azure;">
    <div class="container">
    <div class="row">
        <div class="prefer title-product"><h2>Related Products</h2></div>
    </div>
    <div class="row mt-2">
        
        @foreach($related_datas as $related_data)
        @php
        $name_product=strtolower($related_data->name);
        $data=explode(" ",$name_product);
        $name_product=implode('-',$data);
        @endphp
     <div class="col-sm-3" style="margin-right:0px; margin-bottom:40px; "  >
         <figure class="card card-lg border-0" style="border:none!important;" >
             <a href="/product/{{ $name_product }}/{{ $related_data->id }}" class="img-wrap card-img-top" data-abc="true"><img width="262px" height="275"  src="{{ asset($related_data->img_path) }}">
             <figcaption class="info-wrap border-0">
                        
 
                            <div class="container mt-4 border-0"style="text-align:center ">
 
                                <strong><a href="/product/{{ $name_product }}/{{ $related_data->id }}" class="title" data-abc="true" style="font-size:20px;color:#2596be;text-decoration:none">{{ $related_data->name }}</a></strong>
                                <div class="price-wrap container mt-2">
                                    <span class="price h5">${{ $related_data->price }}</span> <br> 
                                </div>
                            </a>
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
   </div>
   {{-- </div> --}}
   {{-- <div class="related-product">
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
</div> --}}

@endsection
