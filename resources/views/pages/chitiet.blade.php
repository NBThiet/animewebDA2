@extends('layout')

@section('content')

@foreach ($product_details as $key => $detail)
<div class="containercontent" style="margin-top:0px;">

<div class="contentanime">
    
        
   
    <h1 >{{$detail->product_name}}</h1>
    <div class="taikhoan">

    <img src="{{URL::to('public/images/avatar/'.$detail->bloger_avt)}}" alt="">

    <b class="ten">{{$detail->bloger_name}}</b>
    <i>.{{$detail->product_time}}</i>
    <div class="like">
        <i class="ti-heart"> Like</i>
    </div>
</div>
<div class="noidung">
    <span>
   {{$detail->product_content}}
</span>
</div>

</div>

<div class="livechat">
    <div class="chat">
        <div class="tieude">
             <h4 >Comment</h4>
        <hr  width="90%"  />

        </div>
        <form action="" >
            @csrf
            <input type="hidden" name="product_id" class="comment_product_id"value="{{$detail->product_id}}">
        <div class="comment" id="comment_show">
         
        <br>
    </div>
</form>
   <form action="#">
    <div class="smcomment">
    <input type="text" class="comment_content" name="comment_content">
    <button><i class="ti-comments-smiley"></i></button>
    </div>
   </form>


    </div>
</form>
</div>
@endforeach
</div>

    
@endsection