@extends('master')
<style>
.adding{
    max-width:100%!important;
}
</style>
@section('main')

<div class="header-title" style="width:100%;height:180px;text-align:center;font-size:50px;padding-top:30px;font-weight:bold;color:black;">Gallery</div>
<div class="info " style=";height:180px;text-align:center;font-size:22px;padding-top:20px;color:black;background-color:#f1f1f1"><p style="margin-left:70px;margin-right:70px">Exhibits such as Atlantic sharks, Pacific sharks, coral reefs, penguins, and seals give you the opportunity to get up close to animals from around the globe. Another attraction, the touch tank, allows visitors to touch live animals ranging from a sea star to a stingray!</p></div>
<div class="container">
    <div class="row mt-4">
    
        @for($i=0;$i<=count($datas)-1;$i++)
        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0"  >
          <img
            src="{{ $datas[$i][0]}}"
            class="w-100 shadow-1-strong rounded mb-4"
            alt="Boat on Calm Water"
            @if($i%2==0)
                height="500"
            @else 
                height="400"
            @endif
          />
          @if(isset($datas[$i][1]))
            <img
            src="{{ $datas[$i][1]}}"
            class="w-100 shadow-1-strong rounded mb-4"
            alt="Boat on Calm Water"
            @if($i%2==0)
                height="400"
            @else 
                height="500"
            @endif
            
          />
          @endif
          
        </div>
        
        @endfor
        
      </div>
</div>

@endsection