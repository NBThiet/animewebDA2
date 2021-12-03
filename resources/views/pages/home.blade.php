@extends('layout')

@section('content')

<div class="main-header anim" style="--delay: 0s">Discover</div>
    <div class="main-blogs">
     <div class="main-blog anim" style="--delay: .1s">
      <div class="main-blog__title">“It’s foolish to fear
        what we have yet
         to see and know.”</div>
      <div class="main-blog__author">
       <div class="author-img__wrapper">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
         <path d="M20 6L9 17l-5-5" />
        </svg>
        <img class="author-img" src="https://thuthuatnhanh.com/wp-content/uploads/2018/07/avatar-anime-boy-dep-453x390.jpg" />
       </div>
       <div class="author-detail">
        <div class="author-name">Ken</div>
        <div class="author-info">53K views <span class="seperate"></span></div>
       </div>
      </div>
      <div class="main-blog__time">7 min</div>
     </div>
     <div class="main-blog anim" style="--delay: .2s">
      <div class="main-blog__title"> “There’s no such
        thing as a free wish.”</div>
      <div class="main-blog__author tips">
       <div class="main-blog__time">7 min</div>
       <div class="author-img__wrapper">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check">
         <path d="M20 6L9 17l-5-5" />
        </svg>
        <img class="author-img" src="https://pi102.com/wp-content/uploads/2021/02/anime-nam-ngau-10.jpg"/>
       </div>
       <div class="author-detail">
        <div class="author-name">Sky Nguyen</div>
        <div class="author-info">53K views <span></span></div>
       </div>
      </div>
     </div>
    </div>
 
    <div class="small-header anim" style="--delay: .3s">New Anime</div>
    <div class="videos">
      @foreach ($all_product as $key => $product)
     <div class="video anim" style="--delay: .4s">
      <div class="video-time">new</div>
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