<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AnimeDiscover</title>
    <link rel="stylesheet" href="{{asset('public/frontend/css/shop.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/profile.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/css/content.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/font/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/frontend/font/font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

   <style>
       body{
  
  background-image: url(https://allimages.sgp1.digitaloceanspaces.com/photographercomvn/2020/08/Hinh-anh-bau-troi-dem-sao-tuyet-dep-va-binh.png);
  
  
}

.theroot{
  background-color: rgb(26, 26, 39);
  position: relative;
  width: 96%;
  margin-left: 2%;
  height: 620px;
  margin-top:15px;
  border-radius: 30px;
  position: fixed;
  overflow-y: auto;
  z-index: 2;
}
.theroot::-webkit-scrollbar{
  display: none;
}
.main{
  
  display: table;

  table-layout: fixed; 
  border-spacing: 10px;



}
.main .menu, .main .content,.main {
  display: table-cell;
}

.menu{
  width: 15%;
  position: absolute;
  height: 600px;
  position: fixed;
  overflow-y: auto;
  overflow: -moz-scrollbars-none;
  -ms-overflow-style: none;
}
.menu::-webkit-scrollbar { 
  width: 0 !important;
  display: none; 
}
.menu span{
  color: rgb(109, 106, 112);
  font-size: 15px;
  margin-left:0px;
}
.menu li{
  padding: 15px  0 ;
  text-decoration: none;
  list-style-type: none;
  color: rgb(109, 106, 112);
  font-size: 20px;
 
  border-radius: 20px;
  margin-top: -5px;
  
}
.menu li a{
  text-decoration: none;
  color: rgb(109, 106, 112);
}
.menu ul{
  margin-top: 40px;
}

.menu hr{
  height:1px;
  border:none;
  color:#333;
  background-color:#333;
}

.content{
position: absolute;
margin-left: 15%;

}

.head input{
  width: 400px;
  margin-left: 20px;
  margin-top: 20px;
  height: 30px;
  border-radius: 10px;
  background-color: rgb(66, 66, 75);
  border: none;
}
.head .ti-search{
  margin-left: 0px;
  margin-top: 3px;
  color: rgb(240, 236, 243);
  width:50px;
  font-size:15px;
  text-align:center;
  height:30px;
}
.head .admin, .anime .admin{
  margin-left:  82%;
  margin-top: -3%;

}
.head .admin img,  .anime .admin img {
  height: 42px;
  width: 42px;
  border-radius: 50%;
 
  padding: 4px;
  border-radius: 50%;
  -o-object-fit: cover;
     object-fit: cover;
  
  
}
.head .admin span a , .anime .admin span{
  color:rgb(207, 208, 221);
  margin-left:25%;
  margin-top:-30px;
  font-size: 18px;
  z-index: -2;
  display: block;
  text-decoration: none;
  list-style-type: none;
}
.head{
 z-index: 2;
 position: fixed;
 background-color: rgb(26, 26, 39);
width: 78%;  
height: 80px;
border-radius:0 30px 0 0;
 
}
.container  h2{

  font-size: 30px;
  color:rgb(207, 208, 221);
  font-family:Arial, Helvetica, sans-serif ;
  margin-top: 70px;
}

.content .container {
  
  overflow-y: auto;
  display: table;
 
  margin-left: -1%;
  table-layout: fixed; 
  border-spacing: 10px;
  height:500px;
}
.container .slide{
  margin-top: 0px;
  width: 100%;
}
.container .img1 , .container .img2{
  display: table-cell;
}
.content .container .slide .img1{
  width: 70%;
  height: 300px;
  z-index: 1;
 
  background-size: 88%;
  background-image: url(https://st.quantrimang.com/photos/image/2019/04/24/Naruto-Wallpaper-18.jpg);
  border-radius: 30px;
  background-position: -50px -10px;
}
.content .container .slide .img2{
  width: 50%;
 
  height: 300px;
  z-index: 1;
  
  background-image: url(https://cdn.donmai.us/original/d3/1f/__yato_noragami_drawn_by_nian__d31f6795d58b5a12b219651247e45981.jpg);
  border-radius: 30px;
  margin-left: 72%;
  background-size: 350px;
 
  
}

/* phần hiện tài khoản*/
.content .container .slide .img1 .profile1{
  margin-top: 30px;
  
  height: 42px;

  margin-left: 5%;
}
.content .container .slide .img2 .profile1{
  margin-top: 80px;
  
  height: 42px;

  margin-left: 6%;
}
.profile1 span{
  color: rgb(192, 197, 202);
  display: block;
  margin-left: 70px;
  margin-top: -60px;
  font-size: 20px;
}
.profile1 i{
  color: rgb(192, 197, 202);
  display: block;
  margin-left: 70px;
  margin-top: 10px;
  font-size: 18px;
}
.img2 span{
  color: rgb(197, 9, 81);
  display: block;
 margin-left: -1px;
  margin-top: -110px;
  font-size: 20px;
}
.img2 i{
  color: rgb(148, 63, 63);
  display: block;
  
  margin-top: 3px;
  font-size: 18px;
  margin-left: -10px;
}
.content .container .slide .img1 img{
  width: 52px;
height: 52px;
border: 1px solid rgba(255, 255, 255, 0.75);
padding: 4px;
border-radius: 50%;
-o-object-fit: cover;
   object-fit: cover;
} 
.content .container .slide .img2 img{
  width: 42px;
height: 42px;
border: 1px solid rgba(37, 63, 209, 0.75);
padding: 4px;
border-radius: 50%;
-o-object-fit: cover;
   object-fit: cover;
} 
.content .container .slide .img1 span{

}
.img1 p{
  font-size: 30px;
  color: #fff;
  margin-left: 4%;
 
 font-family:Florence, cursive;
}

.img2 p{
  font-size: 30px;
  color: #fff;
  margin-left: 4%;
 
 font-family:Florence, cursive;
}

/* chinh cac bo anime*/

/* nơi thêm các bộ anime*/
.anime{
  width: 100%;
  display: table;

  table-layout: fixed; 
  border-spacing: 10px;
 margin-top: 5%;
}
.anime .anime1{
  display: table-cell;
  position: relative;
 

 box-sizing: border-box;
 
 overflow: hidden;
}
.anime .animes{
  border-radius: 30px;
}
.animes img{
  height: 300px;
  width: auto;
 border-radius: 30px;
}
.anime .animes img:hover{
 
   opacity: 0.5;
}
/*phần hiện lên khi hover vào anime*/
.anime .anime1 .nar{
  
  height:100px;
  margin-top: -100px;
  position: absolute;
  width:213px;
  left: 0px;
   border-radius: 0 0 30px 30px;
   background: rgb(46, 46, 51,0.7) ;
 
}
.anime .anime1:hover .nar{
  

}
.anime .anime1 .nar h3{

   color: #fff;
   justify-content: center;
   text-align: center;
   margin-top: 40px;
}

/* phan admin anime*/
.anime .admin{
   margin-left:  20px;
   margin-top: -100px;
   
}
 .anime .admin img {
   height: 42px;
   width: 42px;
   border-radius: 50%;
   border: 1px solid rgba(255, 255, 255, 0.75);
   padding: 4px;
   border-radius: 50%;
   -o-object-fit: cover;
      object-fit: cover;
   
}
.anime .admin span{
   color:rgb(253, 253, 253);
   margin-left:25%;
   margin-top:-25px;
   font-size: 18px;
   z-index: -2;
   display: block;
}
/*phan content */
.containercontent{

margin-top: -10px;
display: table;

table-layout: fixed; 
border-spacing: 10px;
position: relative;
}
.contentanime ,.livechat{
display: table-cell;
}
.contentanime{
width: 75%;
margin-top: 72px;
display: block;
margin-left: 60px;

}

.contentanime h1{
 margin-left: -40px;
 color: beige;

font-family: cursive;
}
.like {
 margin-left:60%;
 margin-top: -50px;


}
.like i{
 margin-left: -50px;
 background-color:rgb(209, 62, 86);
 width: 100px;
padding: 10px 0;
text-align: center;
border-radius: 10px;
 
}

/* chinh phan ten nguoi dang*/
.contentanime .taikhoan{
height:50px;
width: 100%;
margin-top: 30px;
}
.contentanime .taikhoan img{

height:50px;
width: 50px;
border-radius: 50%;
border: 1px solid rgba(255, 255, 255, 0.75);
padding: 4px;

-o-object-fit: cover;
 object-fit: cover;
}

.contentanime .taikhoan .ten{
margin-top: -50px;
z-index: -2;
margin-left: 80px;
display: block;
color: azure;
}
.contentanime .taikhoan i{
margin-left: 80px;
margin-top:10px;
display: block;
color: beige;
}
.noidung{
width:100%;
margin-top: 30px;
font-size:15px;
color: rgb(171, 171, 175);
font-family: cursive;
text-align: center;
}
/* chinh sua phan live chat*/
.livechat{
height: 300px;
width:20%;



}

.livechat .chat{
 height: 400px;
width:310px;
background-color: rgb(41, 41, 54);

z-index: 1;
margin-left: -120px;
margin-top: 100px;
border-radius:20px;
position: fixed;

}
/* tai khoan comment*/

.comment::-webkit-scrollbar {
display: none;
}

.comment{
overflow-y: auto;
height: 300px;
}
.comment .taikhoan i{
color: rgb(55, 54, 61);
}
.tieude{

width: 100%;
}
.tieude h4{
color: beige;
margin-left: 20px;
margin-top:5px;
font-size: 20px;
font-family: cursive;
}
.tieude hr{
height:1px;
border:none;
color:#333;
background-color:#333;
margin-top: -15px;
margin-left: 15px;
}
.smcomment input{

height: 30px;
width:90%;
margin-left: 4%;
border-radius:20px;
font-size: 18px;
background-color: rgb(60, 61, 70);
border: none;
color: rgb(197, 197, 206);
}
.livechat .taikhoan{
height:50px;
width: 100%;
margin-bottom: 20px;
}
.livechat .taikhoan img{

margin-left: 20px;
height:40px;
width: 40px;
border-radius: 50%;

padding: 4px;
border-radius: 50%;


}

.livechat .taikhoan .ten{
margin-top: -40px;
z-index: -2;
margin-left: 70px;
display: block;
color: azure;
}
.livechat .taikhoan i{
margin-left: 70px;
margin-top:7px;
display: block;
color: rgb(158, 161, 187);

}
.smcomment .ti-comments-smiley {
position: absolute;
z-index: 3;
margin-top: 2px;
margin-left: -30px;
border-radius: 50%;
background-color:rgb(132, 99, 163);
padding: 5px 5px;
color:aliceblue;
}

   </style>

</head>
<body>
    <div class="theroot">
        <div class="main">
    <div class="menu">
        <li class="ti-angle-double-left" > <a href="{{URL::to('/homepage')}}">Home Page</a> </li>
    <ul>
        <span>MENU</span>
       <li class="ti-home menucon" > <a href="{{URL::to('/discover')}}" >Discover</a> </li>
       
        <li class="ti-gallery">  <a href="{{URL::to('/add-product')}}"class="menucon">Create Post</a> </li>
       
        <li class="ti-shift-left">  <a href="{{URL::to('/')}}"class="menucon">SingOut</a> </li>
       
    </ul>
    <hr  width="60%" align="center" />
   <ul>
       @foreach($category as $key => $cate)
       <li class="{{$cate ->category_product_icon}}"> <a href="{{URL::to('/danh-muc-anime/'.$cate->slug_category_product)}}">
       {{$cate->category_product_name}}</a></li>

       @endforeach
   </ul>
   
    </div>
  
    <div class="content">
      
        <div class="head">
            <form action="{{URL::to('/tim-kiem')}}" method="POST" >
                {{csrf_field()}}

        <input type="text"  name="keywords_submit" id=""style="color: rgb(214, 203, 203)">
       <button type="submit" name="search_items" style="background-color:rgb(66, 66, 75);border-style: none;margin-left:-37px; "> 
        <i class="ti-search" style="color: rgb(165, 162, 162)" ></i> </button>
    </form>
        <div class="admin">
         <img src="{{URL::to('public/images/avatar/'.Session::get('bloger_avt'))}}" alt="">;
          
            <span><a href="{{URL::to('/profile')}}" class="nameprf" >
            <?php
                $name = Session::get('bloger_name');
                if($name){
                    echo $name;
                    
                }
                ?></a></span>
        </div>
      
    </div>
   
   
  @yield('content');
   
    </div>
  

</div>
    </div>
<script src="text/javascript">
$(document).ready(function(){
  load_comment();
  function load_comment() {
    var product_id = $('.comment_product_id').val();
  var _token=$('input[name="_token"]').val();,
    $.ajax({
      url:"{{url('/comment-ajax')}}",
      method:"POST",
      data:{product_id:product_id,_token:_token},
      success:function(data){
        $('#comment_show').html(data);
      }
    });
  }
  $('send-comment').click(function (){
    var product_id = $('.comment_product_id').val();
  var _token=$('input[name="_token"]').val();,
  $.ajax({
      url:"{{url('/send-comment-ajax')}}",
      method:"POST",
      data:{product_id:product_id,comment_content:comment_content,_token:_token},
      success:function(data){
      
       load_comment();

      }
    });
  })
})
</script>
    <script src="{{asset('public/backend/ckeditor/ckeditor.js')}}"></script>
    <script>
     // Replace the <textarea id="editor1"> with a CKEditor
     // instance, using default configuration.
     CKEDITOR.replace('ckeditor');
     CKEDITOR.replace('ckeditor1');
     CKEDITOR.replace('ckeditor2');
     CKEDITOR.replace('ckeditor3');
     CKEDITOR.replace('id4');
    </script>
    
    <script src="{{asset('public/frontend/js/shop.js')}}"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>