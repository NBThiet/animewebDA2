

@extends('layout')
@section('content')

@foreach ($category_name as $key => $product)

<div class="main-header anim" style="--delay: 0s">{{$product->category_product_name}}</div>
@endforeach
<div class="videos">
            @foreach ($category_by_id as $key => $product)
            <div class="video anim" style="--delay: .4s">
                
                <a href="{{URL::to('/chi-tiet-anime/'.$product->product_id)}}">
                <div class="video-wrapper">
             
                 <video muted="">
                  <source src="{{URL::to('public/uploads/product/'.$product->product_video)}}" type="video/mp4">
                 </video>
                 
                 <div class="author-img__wrapper video-author">
                  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
                   <path d="M20 6L9 17l-5-5" />
                  </svg>
                  <img class="author-img" src="{{URL::to('public/images/avatar/'.$product->bloger_avt)}}" />
                 </div>
               
                </div>
              </a>
                <div class="video-by">{{$product->bloger_name}}</div>
                <div class="video-name">{{$product->product_name}}</div>
                <div class="video-view">{{$product->product_time}}<span class="seperate video-seperate"></span></div>
               </div>
            
                @endforeach
           </div>

           <style>
             .flex{
                   margin-top: 30px;
                   text-align: center;
                   height: 35px;
                   font-size: 18px;
             }
             .flex a{
               text-decoration: none;
               color: rgb(162, 236, 224);
               margin:10px;
              
              
             }
             .flex span{
               color: rgb(114, 114, 112);
              
             }
           </style>
                {{$category_by_id->links()}}
            
     

    <br>  <br>
   
    <script>
      const allVideos = document.querySelectorAll(".video");
    
    allVideos.forEach((v) => {
     v.addEventListener("mouseover", () => {
      const video = v.querySelector("video");
      video.play();
     });
     v.addEventListener("mouseleave", () => {
      const video = v.querySelector("video");
      video.pause();
     });
    });
    
    </script>
    
 
@endsection