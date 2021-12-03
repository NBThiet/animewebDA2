<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Anime Web</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://vjs.zencdn.net/5-unsafe/video-js.css'><link rel="stylesheet" href="./style.css">
<!--
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<link rel="stylesheet" href="{{asset('public/frontend/css/profile.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/all.css')}}">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

-->
<!-- favicon -->
<link rel="apple-touch-icon" sizes="180x180" href="public/frontend/favicon_io/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="public/frontend/favicon_io/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="public/frontend/favicon_io/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<!-- favicon -->

<link rel="stylesheet" href="{{asset('public/frontend/css/profile.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/al.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/font/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/font/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/addAnim.css')}}">

<link rel="stylesheet" href="{{asset('public/frontend/css/stylepro.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/css/styleadd.css')}}">

<link rel="stylesheet" href="{{asset('public/frontend/font/angle-double-small-left.svg')}}">

<link rel="stylesheet" href="{{asset('public/frontend/font/themify-icons/themify-icons.css')}}">
<link rel="stylesheet" href="{{asset('public/frontend/font/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

</head>
<body>
  <style>
    .container {
  background-color: var(--theme-bg);
  max-width: 1500px;
  max-height: 900px;
  height: 100vh;
  display: flex;
  overflow: hidden;
  width: 107%;
  border-radius: 20px;
  font-size: 15px;
  font-weight: 500;
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.3);
  position: relative;
}

  </style>

  <script>
    
    $(function () {
 $(".sidebar-link").click(function () {
  $(".sidebar-link").removeClass("is-active");
  $(this).addClass("is-active");
 });
});

$(window)
 .resize(function () {
  if ($(window).width() > 1090) {
   $(".sidebar").removeClass("collapse");
  } else {
   $(".sidebar").addClass("collapse");
  }
 })
 .resize();


$(function () {
 $(".logo, .logo-expand, .discover").on("click", function (e) {
  $(".main-container").removeClass("show");
  $(".main-container").scrollTop(0);
 });
 $(".trending, .video").on("click", function (e) {
  //$(".main-container").addClass("show");
  $(".main-container").scrollTop(0);
  $(".sidebar-link").removeClass("is-active");
 // $(".trending").addClass("is-active");
 });

 $(".video").click(function () {
  var source = $(this).find("source").attr("src");
  var title = $(this).find(".video-name").text();
  var person = $(this).find(".video-by").text();
  var img = $(this).find(".author-img").attr("src");
  $(".video-stream video").stop();
  $(".video-stream source").attr("src", source);
  $(".video-stream video").load();
  $(".video-p-title").text(title);
  $(".video-p-name").text(person);
  $(".video-detail .author-img").attr("src", img);
 });
});
  </script>
<!-- partial:index.partial.html -->
<div class="container">
 <div class="sidebar">
  <span class="logo">S</span>
  <a class="logo-expand" href="{{URL::to('/homepage')}}">home page</a>
  <div class="side-wrapper">
   <div class="side-title">MENU</div>
   <div class="side-menu">
    <a class="sidebar-link discover is-active" href="{{URL::to('/discover')}}">
     <svg viewBox="0 0 24 24" fill="currentColor">
      <path d="M9.135 20.773v-3.057c0-.78.637-1.414 1.423-1.414h2.875c.377 0 .74.15 1.006.414.267.265.417.625.417 1v3.057c-.002.325.126.637.356.867.23.23.544.36.87.36h1.962a3.46 3.46 0 002.443-1 3.41 3.41 0 001.013-2.422V9.867c0-.735-.328-1.431-.895-1.902l-6.671-5.29a3.097 3.097 0 00-3.949.072L3.467 7.965A2.474 2.474 0 002.5 9.867v8.702C2.5 20.464 4.047 22 5.956 22h1.916c.68 0 1.231-.544 1.236-1.218l.027-.009z" />
     </svg>
     Discover
    </a>
    <a class="sidebar-link" href="{{URL::to('/add-product')}}">
      <svg viewBox="0 0 24 24" fill="currentColor">
       <path d="M11.23 7.29V3.283c0-.427.34-.782.77-.782.385 0 .711.298.763.677l.007.104v4.01h4.78c2.38 0 4.335 1.949 4.445 4.38l.005.215v5.04c0 2.447-1.887 4.456-4.232 4.569l-.208.005H6.44c-2.38 0-4.326-1.94-4.435-4.379L2 16.905v-5.03c0-2.447 1.878-4.466 4.222-4.58l.208-.004h4.8v6.402l-1.6-1.652a.755.755 0 00-1.09 0 .81.81 0 00-.22.568c0 .157.045.32.14.459l.08.099 2.91 3.015c.14.155.34.237.55.237a.735.735 0 00.465-.166l.075-.071 2.91-3.015c.3-.31.3-.816 0-1.126a.755.755 0 00-1.004-.077l-.086.077-1.59 1.652V7.291h-1.54z" />
      </svg>
      Create
     </a>
    
    <a class="sidebar-link trending" href="{{URL::to('/')}}">
     <svg viewBox="0 0 24 24" fill="currentColor">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M10.835 12.007l.002.354c.012 1.404.096 2.657.242 3.451 0 .015.16.802.261 1.064.16.38.447.701.809.905a2 2 0 00.91.219c.249-.012.66-.137.954-.242l.244-.094c1.617-.642 4.707-2.74 5.891-4.024l.087-.09.39-.42c.245-.322.375-.715.375-1.138 0-.379-.116-.758-.347-1.064-.07-.099-.18-.226-.28-.334l-.379-.397c-1.305-1.321-4.129-3.175-5.593-3.79 0-.013-.91-.393-1.343-.407h-.057c-.665 0-1.286.379-1.603.991-.087.168-.17.496-.233.784l-.114.544c-.13.874-.216 2.216-.216 3.688zm-6.332-1.525C3.673 10.482 3 11.162 3 12a1.51 1.51 0 001.503 1.518l3.7-.328c.65 0 1.179-.532 1.179-1.19 0-.658-.528-1.191-1.18-1.191l-3.699-.327z" />
     </svg>
     SignOut
    </a>
   
   </div>
  </div>
  <div class="side-wrapper">
   <div class="side-title">CATEGORY</div>
   <div class="side-menu">
    @foreach($category as $key => $cate)
    <a class="sidebar-link" href="{{URL::to('/danh-muc-anime/'.$cate->slug_category_product)}}">
     <svg viewBox="0 0 24 24" fill="currentColor" >
     <circle class="angle-double-small-left"cx="50" cy="50" r="50"  stroke-width="8"/>
     </svg>
    {{$cate->category_product_name}}
    </a>
   @endforeach
   </div>
  </div>
 </div>
 <div class="wrapper">
  <div class="header">
   <div class="search-bar">
    <form action="{{URL::to('/tim-kiem')}}" method="POST" >
      {{csrf_field()}}
    <input type="text" placeholder="Search" name="keywords_submit">
  </form>
   </div>
   <div class="user-settings">
    <img class="user-img" src="{{URL::to('public/images/avatar/'.Session::get('bloger_avt'))}}"alt="">
    <div class="user-name"> <span><a href="{{URL::to('/profile')}}" class="nameprf" style="text-decoration: none;color:rgb(165, 164, 164);">
      <?php
          $name = Session::get('bloger_name');
          if($name){
              echo $name;
              
          }
          ?></a></span></div>
    <svg viewBox="0 0 492 492" fill="currentColor">
     <path d="M484.13 124.99l-16.11-16.23a26.72 26.72 0 00-19.04-7.86c-7.2 0-13.96 2.79-19.03 7.86L246.1 292.6 62.06 108.55c-5.07-5.06-11.82-7.85-19.03-7.85s-13.97 2.79-19.04 7.85L7.87 124.68a26.94 26.94 0 000 38.06l219.14 219.93c5.06 5.06 11.81 8.63 19.08 8.63h.09c7.2 0 13.96-3.57 19.02-8.63l218.93-219.33A27.18 27.18 0 00492 144.1c0-7.2-2.8-14.06-7.87-19.12z"></path>
    </svg>
    <div class="notify">
     <div class="notification"></div>
    
    </div>
   </div>
  </div>
  <div class="main-container">
    
   @yield('content')
   </div>
 </div>
</div>

<script>
  
</script>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://vjs.zencdn.net/5-unsafe/video.js'></script><script  src="{{URL::asset('public/frontend/js/javajspro')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


<script>
  /*
  $(document).ready(function() {
      load_comment();
function load_comment(){
  var _token = $('input[name="_token"]').val();
  var comment_product_id=  $('.comment_product_id').val();
  $.ajax({
url  : '{{url('/load-comment')}}',
method: 'POST',
data:{comment_product_id:comment_product_id,_token:_token},
success: function(data){
$('#load_comment').html(data);
}
})

}
$('.sent_comment').click(function(e){
  e.preventDefault()
  var comment = $('.comment').val();
  var _token = $('input[name="_token"]').val();
  var comment_product_id=  $('.comment_product_id').val();

  $.ajax({
url  : '{{url('/sent-comment')}}',
method: 'POST',
data:{comment_product_id:comment_product_id,comment:comment,_token:_token,},
success:function(data){
  alert("Xin cảm ơn","Đánh giá của bạn đang được kiểm duyệt","success")
  load_comment();
  $('.comment').val('');

}
  })
})
  })*/
</script>

</body>
</html>
