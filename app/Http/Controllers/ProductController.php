<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Slider;
use App\commentModel;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class ProductController extends Controller
{
   
    public function add_product(){
       
    $category_product = DB::table('tbl_category_product')
    ->where('category_product_status','0')->orderby('category_id','desc')->get();

        $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get(); 
        $bloger_product = DB::table('tbl_bloger')->orderby('bloger_id','desc')->get(); 
       // $comment_product = DB::table('tbl_comment')->orderby('comment_id','desc')->get(); 
   
        return view('pages.add_product')->with('cate_product', $cate_product)->with('bloger_product',$bloger_product)
        ->with('category',$category_product)->with('bloger_id',Session::get('bloger_id'));
    	

    }
    public function all_product(){
      
    	$all_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_bloger','tbl_bloger.bloger_id','=','tbl_product.bloger_id')
       // ->join('tbl_comment','tbl_comment.comment_id','=','tbl_product.comment_id')
        ->orderby('tbl_product.product_id','desc')->paginate(5);
    	$manager_product  = view('admin.all_product')->with('all_product',$all_product);
    	
    	return view('admin_layout')->with('admin.all_product', $manager_product);
    

    }
    
    public function save_product(Request $request){
      
    	$data = array();
    	$data['product_name'] = $request->product_name;
        $data['product_content'] = $request->product_content;
        $data['category_id'] = $request->product_cate;
        $data['bloger_id'] =   $request->bloger_product;
      // $data['comment_id'] = $request->product_comment;
        $data['product_status'] = $request->product_status;
        $data['product_time'] = $request->product_time;
        $data['product_img'] = $request->product_status;
        $get_img = $request->file('product_img');
      
        if($get_img){
            $get_name_img = $get_img->getClientOriginalName();
            $name_img = current(explode('.',$get_name_img));
            $new_img =  $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
            $get_img->move('public/uploads/product',$new_img);
            $data['product_img'] = $new_img;
            DB::table('tbl_product')->insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('add-product');
        }
        $data['product_img'] = '';
    	DB::table('tbl_product')->insert($data);
    	Session::put('message','Thêm sản phẩm thành công');
    	return Redirect::to('all-product');
    }
    public function unactive_product($product_id){
       
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>1]);
        Session::put('message','Không kích hoạt sản phẩm thành công');
        return Redirect::to('all-product');

    }
    public function active_product($product_id){
       
        DB::table('tbl_product')->where('product_id',$product_id)->update(['product_status'=>0]);
        Session::put('message','Không kích hoạt sản phẩm thành công');
        return Redirect::to('all-product');
    }
    public function edit_product($product_id){
       
         $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get(); 
         $bloger_product = DB::table('tbl_bloger')->orderby('bloger_id','desc')->get(); 
       // $comment_product = DB::table('tbl_comment')->orderby('comment_id','desc')->get(); 
 

        $edit_product = DB::table('tbl_product')->where('product_id',$product_id)->get();

        $manager_product  = view('admin.edit_product')->with('edit_product',$edit_product)->with('cate_product',$cate_product)->with('bloger_product', $bloger_product);

        return view('admin_layout')->with('admin.edit_product', $manager_product);
    }
    public function update_product(Request $request,$product_id){
       
        $data = array();
        $data['product_name'] = $request->product_name;
        $data['product_content'] = $request->product_content;
      //  $data['category_id'] = $request->product_cate;
       
      // $data['comment_id'] = $request->product_comment;
        $data['product_status'] = $request->product_status;
        $data['product_time'] = $request->product_time;
        $data['product_img'] = $request->product_status;
        $get_img = $request->file('product_img');
        
        if($get_img){
                    $get_name_img = $get_img->getClientOriginalName();
                    $name_img = current(explode('.',$get_name_img));
                    $new_img =  $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
                    $get_img->move('public/uploads/product',$new_img);
                    $data['product_img'] = $new_img;
                    DB::table('tbl_product')->where('product_id',$product_id)->update($data);
                    Session::put('message','Cập nhật sản phẩm thành công');
                    return Redirect::to('all-product');
        }
            
        DB::table('tbl_product')->where('product_id',$product_id)->update($data);
        Session::put('message','Cập nhật sản phẩm thành công');
        return Redirect::to('all-product');
    }
    public function delete_product($product_id){
      
        DB::table('tbl_product')->where('product_id',$product_id)->delete();
        Session::put('message','Xóa sản phẩm thành công');
        return Redirect::to('all-product');
    }
    // chi tiet san pham
public function details_product($product_id, Request $request){
    $cate_product = DB::table('tbl_category_product')
    ->where('category_product_status','0')->orderby('category_id','desc')->get();

    $bloger_product = DB::table('tbl_bloger')->where('bloger_status','0')
    ->orderby('bloger_id','desc')->get();
    $details_product = DB::table('tbl_product')
    ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
    ->join('tbl_bloger','tbl_bloger.bloger_id','=','tbl_product.bloger_id')
    ->where('tbl_product.product_id',$product_id)->get();
  
    foreach($details_product as $key => $value){
        $category_id = $value->category_id;
       
        }
       
    $related_product = DB::table('tbl_product')
 
    ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
    ->join('tbl_bloger','tbl_bloger.bloger_id','=','tbl_product.bloger_id')
    ->where('tbl_category_product.category_id',$category_id)
    ->whereNotIn('tbl_product.product_id',[$product_id])->get();
    return view('pages.chitiet')
    ->with('category',$cate_product)
    ->with('bloger',$bloger_product)
    ->with('product_details',$details_product)
    ->with('relate',$related_product);
  
    }
// phan comment
public function send_comment(Request $request){
    $product_id = $request->product_id;
    $comment_content = $request->comment_content;
    $comment = new Comment();
    $comment->comment_content = $comment_content;
    $comment->product_id = $product_id;

    $comment -> save();


}
public function load_comment(Request $request){
    $product_id = $request->product_id;
    $comment = commentModel::where('product_id',$product_id)->get;
 foreach($comment as $key=>$comm){
     $output.=` <div class="taikhoan">
  
      <img src=".'ulr('/public/images/avatar/.'$comm->bloger_avt')'." alt="">
 
      <b class="ten">.'$comm->bloger_name.'<b>
      <i>.'$comm->comment_content'.</i>
      <i class="fab fa-telegram-plane"></i>
  </div>`;
 }
 echo $output;
}
    //End Admin Page
   
    /*
    public function details_product($product_slug , Request $request){
         //slide
        $slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 

        $details_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('tbl_product.product_slug',$product_slug)->get();

        foreach($details_product as $key => $value){
            $category_id = $value->category_id;
                //seo 
                $meta_desc = $value->product_desc;
                $meta_keywords = $value->product_slug;
                $meta_title = $value->product_name;
                $url_canonical = $request->url();
                //--seo
            }
       
        $related_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_brand','tbl_brand.brand_id','=','tbl_product.brand_id')
        ->where('tbl_category_product.category_id',$category_id)->whereNotIn('tbl_product.product_slug',[$product_slug])->orderby(DB::raw('RAND()'))->paginate(3);


        return view('pages.sanpham.show_details')->with('category',$cate_product)->with('brand',$brand_product)->with('product_details',$details_product)->with('relate',$related_product)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical)->with('slider',$slider);

    }*/
}
