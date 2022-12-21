@extends('master')

@section('main')
<div class="title" 
style="text-align:center;font-size:40px;color:black;
font-weight:bold;margin-top:30px;margin-bottom:10px;">Feeding Schedule</div>
 <section class="hero hero_style_video">

    <div class="hero__video" ">
          <video autoplay="" loop="" muted="" playsinline="" poster="" id="head">
      <source src="{{ asset('img/Jenkinsons_Aquarium_Seals1_20170602.mp4') }}" type="video/mp4">
      </video>
          </div>

    
      {{-- <div class="wrap">

        <div class="hero__content">
          <p><img class="aligncenter size-full wp-image-9457" src="{{ asset('img/30th-logo-png.png') }} " width="50%" height="50%"></p>
          <!-- bao width,height -->
        </div>
        
        <a href="{{ asset('img/30th-logo-png.png') }}" class="hero__button button">
          30th Anniversary</a>
        
      </div> --}}

    
    </section>
    <div class="feeding-time" 
style="text-align:center;font-size:30px;color:black;
font-weight:bold;margin-top:30px;margin-bottom:30px;">Feeding Schedule</div>
<div class="container">
  <div class="row">
    <div class="col-md-6" style="">
      <div class="title-season" style="text-align:center;font-size:30px;color:black;
      font-weight:bold;margin-top:30px;margin-bottom:30px;">Summer Feedings</div>
      <div class="time" style="text-align:center;font-size:20px;color:black;
      font-weight:bold;margin-top:30px;margin-bottom:30px;"><i>begins 6/23/2022</i></div>
      <div class="img-present" style="text-align:center;margin-top:30px;margin-bottom:30px;">
        <img src="https://jenkinsons.com/aquarium/wp-content/uploads/sites/2/2020/09/E75_8245-1.jpg" style="border-radius:100%" height="300" width="300" alt="">
      </div>
      <div class="feeding-schedule" style="font-size:20px;color:black;
      margin-top:30px;margin-bottom:30px;margin-left:20px;">
        <ul style="list-style-type:none;line-height:60px;">
          <li><strong>Seals:</strong>&nbsp10am, 3pm, & 8pm Daily</li>
          <li><strong>Penguins:</strong>&nbsp12pm & 7:30pm Daily</li>
          <li><strong>Sharks:</strong>&nbsp4pm Mondays, Wednesdays & Saturdays</li>
        </ul>
      </div>
    </div>
    <div class="col-md-6" style="">
      <div class="title-season" style="text-align:center;font-size:30px;color:black;
      font-weight:bold;margin-top:30px;margin-bottom:30px;">Off Season Feedings</div>
      <div class="time" style="text-align:center;font-size:20px;color:black;
      font-weight:bold;margin-top:30px;margin-bottom:30px;"><i>begins 9/6/2022</i></div>
      <div class="img-present" style="text-align:center;margin-top:30px;margin-bottom:30px;">
        <img src="{{ asset('adopt-animal/1671067626-Noelani-the-seal.jpg') }}" style="border-radius:100%" height="300" width="300" alt="">
      </div>
      <div class="feeding-schedule" style="font-size:20px;color:black;
      margin-top:30px;margin-bottom:30px;margin-left:20px;">
        <ul style="list-style-type:none;line-height:60px;">
          <li><strong>Seals:</strong>&nbsp10am, 1pm, & 4pm Daily</li>
          <li><strong>Penguins:</strong>&nbsp11am & 3:30pm Daily</li>
          <li><strong>Sharks:</strong>&nbsp1:30pm Mondays, Wednesdays & Saturdays</li>
        </ul>
      </div>
    </div>
  </div>
</div>
    
  


@endsection