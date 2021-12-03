@extends('layout')

@section('content')
      <style>
        .animetable {
	background: linear-gradient(-45deg, #b37c3d, #a82934, #3c59b8, #198144);
	background-size: 400% 400%;
	animation: gradient 8s ease infinite;
	height: 100vh;
  border: 10px solid rgba(230, 55, 55, 0.1);
  margin-left:20px;
}

@keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
.tablepost::-webkit-scrollbar {
display: none;
}
.tablepost{
    height: 420px;
    width: 700px;
    background-color: rgb(52, 51, 68);
    border-radius:30px;
    position: absolute;
    margin-left: 330px;
    overflow-y: auto;
}
.imgpr{
    height: 420px;
    width: 300px;
    background-color: rgb(52, 51, 68);
    position: absolute;
    border-radius: 30px;
    
}
/* Important styles */
/* Nút Dropdown*/
.nut_dropdown {
  background-color: transparent;
   color: white;
   
   font-size: 16px;
   border: none;
 }
/* Thiết lập vị trí cho thẻ div với class dropdown*/
 .dropdown {
   position: relative;
   display: inline-block;
 }
/* Nội dung Dropdown */
 .noidung_dropdown {
   /*Ẩn nội dụng các đường dẫn*/
   display: none;
   position: absolute;
   background-color: #f1f1f1;
   min-width: 160px;
   box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
   z-index: 1;
 }
/* Thiết kế style cho các đường dẫn tronng Dropdown */
 .noidung_dropdown a {
   color: black;
   padding: 12px 16px;
   text-decoration: none;
   display: block;
 }
 .hienThi{
   display:block;
 }
 table {
    width: 100%;        
    font-family: arial, sans-serif;
    border-collapse: collapse;
}
th, td {
    padding: 8px;
    text-align: left;
    border-top: 1px solid #b9bcc0;
    height: 10px;
}
    tbody tr:nth-child(odd) {
   
}
tr:hover{
  background-color: rgba(20, 14, 22, 0.3)
}
.animetable{
  margin-top:-3px;
  margin-left:-20px;
}
      </style>
      <div class="main-header anim" style="--delay: 0s">Profile</div>
   <div class="animetable anim" style="--delay: .1s" style=";height:540px;width:95%;border-radius:20px;">
    <label for="" style="height:20px;"></label>
    
     <div class="imgpr anim"style="--delay: .4s; background: rgba(128, 0, 128, 0.3);margin-left:10px;">
        <img class="anim"src="{{URL::to('public/images/avatar/'.Session::get('bloger_avt'))}}" alt="">
        <h2 class="anim"  style="--delay: .3s"> <?php
          $name = Session::get('bloger_name');
          if($name){
              echo $name;
              
          }
          ?></h2>
     </div>
     <div class="tablepost"style=" background: rgba(128, 0, 128, 0.3);">
       
           
      
      <table class="table table-hover table-fill" style="margin-left:15px;padding-right:-20px;width:93%;color:#fff;">
        <thead>
          <tr>
      
            <th scope="col" style="padding-right: 50px;" class="anim">Anime Name</th>
            <th></th>
          </tr>
        </thead>
        
        <tbody class="table-hover anim">
          @foreach($all_product_profile as $key => $product)
          <tr >
           
            <td style="color:rgb(216, 214, 214); height:30px;"class="text-left">{{$product ->product_name}}</td>
      
            <td >
             
              <div class="dropdown">
                <button  onclick="hamDropdown()"  class="nut_dropdown"><i class="ti-more-alt"></i></button>
                <div class="noidung_dropdown">
                  <a href="{{URL::to('/edit-product-profile/'.$product->product_id)}}">Edit</a>
                  <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này ko?')" href="{{URL::to('/delete-product-profile/'.$product->product_id)}}">Delete</a>
                 
                </div>
              </div>
             
              

          </td>
          
          </tr>
         
         @endforeach
        </tbody>
      </table>

      <script>
        function hamDropdown() {
     document.querySelector(".noidung_dropdown").classList.toggle("hienThi");
 }
      </script>
      
     </div>
    
   </div >
@endsection