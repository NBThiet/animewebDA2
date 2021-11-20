@extends('layout')
@section('content')
<div class="row">
            <div class="col-lg-12" style="margin-top: 100px;color:#fff;margin-right:20px;">
                    <section class="panel">
                        <header class="panel-heading">
                            <h2 style="margin-top: -20px;margin-bottom: 30px;">Create Post</h2>
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
                                <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                                    <input type="text" data-validation="length" data-validation-length="min3" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="product_name" class="form-control " id="slug" placeholder="Tên danh mục" onkeyup="ChangeToSlug();"> 
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Dự kiến phút đọc</label>
                                    <input type="text" data-validation="length" data-validation-length="min3" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="product_time" class="form-control " id="slug" placeholder="Tên danh mục" onkeyup="ChangeToSlug();"> 
                                </div>

                              
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                    <input type="file" name="product_img" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Danh mục sản phẩm</label>
                                      <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                            <option value="{{$cate->category_id}}">{{$cate->category_product_name}}</option>
                                        @endforeach
                                            
                                    </select>

                                </div>
                              
                                <div class="form-group">
                                   
                                    <input type="hidden" name="bloger_product" value="{{Session::get('bloger_id')}}">
                              {{-- <label for="exampleInputEmail1" name="bloger_product"value="{{Session::get('bloger_id')}}"></label> --}}
                                </div>
                              
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Hiển thị</label>
                                      <select name="product_status" class="form-control input-sm m-bot15">
                                         <option value="0">Hiển thị</option>
                                            <option value="1">Ẩn</option>
                                            
                                    </select>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="product_content"  id="id4" placeholder="Nội dung sản phẩm"></textarea>
                                </div>
                                
                               
                                <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection