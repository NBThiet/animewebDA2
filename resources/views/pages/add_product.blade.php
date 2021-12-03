@extends('layout')
@section('content')

<style>
    
    .group 			  { 
  position:relative; 
  margin-bottom:45px; 
}
input 				{
  font-size:18px;
  padding:10px 10px 10px 5px;
  display:block;
  width:300px;
  border:none;
  border-bottom:1px solid #757575;
  background-color: transparent;
  color:aliceblue;
}
input:focus 		{ outline:none; }

/* LABEL ======================================= */
label 				 {
  color:#999; 
  font-size:18px;
  font-weight:normal;
  position:absolute;
  pointer-events:none;
  left:5px;
  top:10px;
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}

/* active state */
input:focus ~ label, input:valid ~ label 		{
  top:-20px;
  font-size:14px;
  color:#60d8c8;
}

/* BOTTOM BARS ================================= */
.bar 	{ position:relative; display:block; width:300px; }
.bar:before, .bar:after 	{
  content:'';
  height:2px; 
  width:0;
  bottom:1px; 
  position:absolute;
  background:linear-gradient(to right, #30c084, #e1e436, #b05cd1, #54d1b6); 
  transition:0.2s ease all; 
  -moz-transition:0.2s ease all; 
  -webkit-transition:0.2s ease all;
}
.bar:before {
  left:50%;
}
.bar:after {
  right:50%; 
}

/* active state */
input:focus ~ .bar:before, input:focus ~ .bar:after {
  width:50%;
}

/* HIGHLIGHTER ================================== */
.highlight {
  position:absolute;
  height:60%; 
  width:100px; 
  top:25%; 
  left:0;
  pointer-events:none;
  opacity:0.5;
}

/* active state */
input:focus ~ .highlight {
  -webkit-animation:inputHighlighter 0.3s ease;
  -moz-animation:inputHighlighter 0.3s ease;
  animation:inputHighlighter 0.3s ease;
}

/* ANIMATIONS ================ */
@-webkit-keyframes inputHighlighter {
	from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
}
@-moz-keyframes inputHighlighter {
	from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
}
@keyframes inputHighlighter {
	from { background:#5264AE; }
  to 	{ width:0; background:transparent; }
}
.down{
  height: 40px;
  width:100px;
  border-width: 2px;
  background-color: transparent;
  border-radius: 10px;
  float: left;
  color: rgb(207, 206, 206);
  border-image-source: linear-gradient(45deg, #42c6dd, #a8427a, #39aaa1);
  border-image-slice: 2;
}
.content{
  height: 400px;
  margin-left: 20px;
  background-color: transparent;
  border-radius:20px;
  text-align: center;
  color: #23acb1;
  font-family: cursive;
  border-width: 4px; 
  border-image-source: linear-gradient(45deg, #42c6dd, #a8427a, #39aaa1);
  border-image-slice: 2;
}
.buttn{
  height: 40px;
  width: 150px;
  margin-top: 20px;
  margin-left: 298%;
  background:linear-gradient(45deg, #42c6dd, #a8427a, #39aaa1, #a8427a);
  border-style: none;
  border-radius:5px;
  font-size:18px;
  padding-top: 10px;
   
}
.buttn:hover{
  background:linear-gradient(45deg, #b93687, #42adb4, #a639aa, #42adb4);
}
.row{
  margin-top:-80px;
}
table{
  margin-top:-20px;
}
.form_add{

}
.down .listdown{
  border-width: 1px;
  color:rgb(151, 144, 144);
  background-color:rgb(51, 43, 43);
  border-image-source: linear-gradient(45deg, #42c6dd, #a8427a, #39aaa1);
  border-image-slice: 1;
}
input[type="file"] {
  background-color: transparent;
}

.custom-file-input::-webkit-file-upload-button {
  visibility: hidden;
}
.custom-file-input::before {
  content: 'Select some files';
  display: inline-block;
  background: transparent;
  border: 1px solid #999;
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: 10pt;
  border-style:none;
  opacity:0;
  
}
.custom-file-input:hover::before {
  border-style:none;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
}
/* phan css cho form content*/

</style>

<form>
    
   
  </form>
<script>
    $(window).load(function(){
$(".col-3 input").val("");

$(".input-effect input").focusout(function(){
if($(this).val() != ""){
$(this).addClass("has-content");
}else{
$(this).removeClass("has-content");
}
})
});
</script>
<div class="main-header anim" style="--delay: 0s">Create</div>
<div class="row">
            <div class="col-lg-12" style="margin-top: 100px;">
                    <section class="panel">
                        
                         <?php
                            $message = Session::get('message');
                          
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">

                            <div class="position-center">
                                <form style="margin-left:20px;"class="" role="" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <table>
              <td style="width:300px;margin-top:-30px;">  
                 <div class="form_add">

                <div class="group anim" style="--delay: .1s">      
                    <input type="text" required name="product_name">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Name</label>
                  </div>
                    
                  <div class="group anim" style="--delay: .2s">      
                    <input type="text" required name="product_time">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Time</label>
                  </div>
                  
                  <div class="group anim" style="--delay: .3s">      
                    <input type="file" required name="product_video" class="custom-file-input" >
                    
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Video</label>
                    
                  </div>
         
                <select name="product_cate" class="down form-control input-sm m-bot15 anim" style="--delay: .4s">
                    @foreach($cate_product as $key => $cate)
                        <option class="listdown"value="{{$cate->category_id}}">{{$cate->category_product_name}}</option>
                    @endforeach
                        
                </select>
            </br>
            <input type="hidden" name="bloger_product" value="{{Session::get('bloger_id')}}">
            {{-- <label for="exampleInputEmail1" name="bloger_product"value="{{Session::get('bloger_id')}}"></label> --}}
              
            </br>
             
            <select  name="product_status" class="down form-control input-sm m-bot15" style="display: none">
                <option value="0">Hiển thị</option>
                  
           </select>
        </br></br>
           <button class="buttn anim"style="--delay: .5s" >Summit</button>
        </div> 
        </td>
           <td style="padding-bottom:100px;" >
           <div class="anim" style="--delay: .2s">
            <textarea name="product_content" id=""  class="card content" cols="30" rows="10" style=" width:225%; font-size:15px;" ></textarea>
       </td>
           
        </div>
                                       
                                    </div>
                                
                                </table>
                                    </form>
                               
                            </div>

                        </div>
                 
@endsection