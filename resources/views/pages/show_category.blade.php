

@extends('layout')
@section('content')
@foreach ($category_name as $key => $product)

<h2 style="margin-top:80px;color:rgb(207, 208, 221);">{{$product->category_product_name}}</h2>
@endforeach
<div class="anime" style="margin-top:20px;">
    @foreach ($category_by_id as $key => $product)
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