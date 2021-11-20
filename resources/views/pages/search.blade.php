

@extends('layout')
@section('content')

<h2 style="margin-top:80px;color:rgb(207, 208, 221);"></h2>
<span style="margin-top:80px;color:rgb(207, 208, 221)">{{Session::get('mess')}}</span>
<div class="anime" style="margin-top:100px;">
    @foreach ($search_product as $key => $product)
    <div class=anime1>
      <div class="animes"><a href=""><img src="{{URL::to('public/uploads/product/'.$product->product_img)}}" stt="ee1"alt="" srcset=""></a> </div>
      <div class="nar" style="right:50px; "><h3>{{$product->product_name}}</h3>
       <div class="admin">
           <img src="{{URL::to('public/images/avatar/'.$product->bloger_avt)}}" alt="">
           <span>{{$product->bloger_name}}</span>
       </div> 
   </div>
     
     
        </div>
    
        @endforeach
</div>
@endsection