@extends('admin_layout')
@section('admin_content')
<div class="row">
 <div class="col-lg-12">
 <section class="panel">
 <header class="panel-heading">
 Cập nhật sản phẩm
 </header>
 <?php
 $message = Session::get('message');
 if($message){
 echo '<span class="text-alert">'.$message.'</span>';
 Session::put('message',null);
 }
 ?>
 <div class="panel-body">
 <div class="position-center">
 @foreach($edit_product as $key => $pro)
 <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">

 {{ csrf_field() }}
 <div class="form-group">
 <label for="exampleInputEmail1">Tên sản phẩm</label>
 <input type="text" name="product_name" class="formcontrol" id="exampleInputEmail1" value="{{$pro->product_name}}">
 </div>
 
 
 <div class="form-group">
 <label for="exampleInputEmail1">Hình ảnh sản
phẩm</label>
 <input type="file" name="product_img" class="formcontrol" id="exampleInputEmail1">
 <img src="{{URL::to('public/uploads/product/'.$pro->product_img)}}" height="100" width="100">
 </div>
 
 <div class="form-group">
 <label for="exampleInputPassword1">Nội dung</label>
 <textarea style="resize: none" rows="8" class="formcontrol" name="product_content" id="exampleInputPassword1" >{{$pro->product_content}}</textarea>
 </div>
 <div class="form-group">
 <label for="exampleInputPassword1">The Loai</label>
 <select name="category_product_name" class="form-control input-smm-bot15">
 @foreach($cate_product as $key => $cate)
 @if($cate->category_id==$pro->category_id)
 <option selected value="{{$cate->category_id}}">{{$cate->category_product_name}}</option>
 @else
 <option value="{{$cate->category_id}}">{{$cate->category_product_name}}</option>
 @endif

 @endforeach

 </select>
 </div>
 <div class="form-group">
    <label for="exampleInputEmail1">Phut Doc</label>
    <input type="text" name="product_time" class="formcontrol" id="exampleInputEmail1" value="{{$pro->product_time}}">
    </div>
 <div class="form-group">
 <label for="exampleInputPassword1">Hiển thị</label>
 <select name="product_status" class="form-control inputsm m-bot15">

 <option value="0">Ẩn</option>
 <option value="1">Hiển thị</option>

 </select>
 </div>

 <button type="submit" name="add_product" class="btn btninfo">Cập nhật sản phẩm</button>
 </form>
 @endforeach
 </div>
 </div>
 </section>
 </div>
@endsection