<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Mail;
use Session;
use App\Slider;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class HomeController extends Controller
{
   public function index(){
    
    
    $cate_product = DB::table('tbl_category_product')
    ->where('category_product_status','0')->orderby('category_id','desc')->get();

    $all_product = DB::table('tbl_product')->where('product_status','0') 
    ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
    ->join('tbl_bloger','tbl_bloger.bloger_id','=','tbl_product.bloger_id')
    ->orderby('product_id','desc')->limit(4)->get();
    return view('pages.home')->with('category',$cate_product)
   ->with('all_product',$all_product);
  
//seo
 
//--seo

}
  

   public function profile(Request $request){
      
    	$all_product = DB::table('tbl_product')
       ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
       ->join('tbl_bloger','tbl_bloger.bloger_id','=','tbl_product.bloger_id')->get();


      $bloger_id = Session::get('bloger_id');
    $cate_product = DB::table('tbl_category_product')
    ->where('category_product_status','0')->orderby('category_id','desc')->get();

    $all_product_profile = DB::table('tbl_product')
    ->join('tbl_bloger','tbl_bloger.bloger_id','=','tbl_product.bloger_id')
    ->where('tbl_bloger.bloger_id',$bloger_id)
   // ->join('tbl_comment','tbl_comment.comment_id','=','tbl_product.comment_id')
    ->orderby('product_id','desc')->get();
   

       return view('pages.profile')->with('category',$cate_product)
       ->with('all_product_profile',$all_product_profile);;
}

public function search(Request $request){
  
   $keywords = $request->keywords_submit;
   $cate_product = DB::table('tbl_category_product')
   ->where('category_product_status','0')->orderby('category_id','desc')->get();
   $bloger_product = DB::table('tbl_bloger')->where('bloger_status','1')
   ->orderby('bloger_id','desc')->get();
   $search_product = DB::table('tbl_product')
   ->where('product_name','like','%'.$keywords.'%')
   ->join('tbl_bloger','tbl_bloger.bloger_id','=','tbl_product.bloger_id')->limit(8)
   ->get(); 
   $paginate = DB::table('tbl_product')->simplePaginate(8);
   if($search_product){
   return view('pages.search',compact('paginate'))->with('category',$cate_product)
   ->with('bloger',$bloger_product)->with('search_product',$search_product);
   }else{
      Session::put('mess','Khong tim thay ket qua tim kiem');
   }
   }
   // phan chinh sua san pham ow profile
   public function edit_product_profile($product_id){
      $category_product = DB::table('tbl_category_product')
    ->where('category_product_status','0')->orderby('category_id','desc')->get();
      $cate_product = DB::table('tbl_category_product')->orderby('category_id','desc')->get(); 
      $bloger_product = DB::table('tbl_bloger')->orderby('bloger_id','desc')->get(); 
    // $comment_product = DB::table('tbl_comment')->orderby('comment_id','desc')->get(); 


     $edit_product_profile = DB::table('tbl_product')->where('product_id',$product_id)->get();

     return view('pages.edit_product_profile')
     ->with('edit_product_profile',$edit_product_profile)->with('cate_product',$cate_product)
    ->with('bloger_product', $bloger_product)
    ->with('category',$category_product);

     
 }
 public function update_product_profile(Request $request,$product_id){
    
     $data = array();
     $data['product_name'] = $request->product_name;
     $data['product_content'] = $request->product_content;
   //  $data['category_id'] = $request->product_cate;
    
   // $data['comment_id'] = $request->product_comment;
     $data['product_status'] = $request->product_status;
     $data['product_time'] = $request->product_time;
     $data['product_video'] = $request->product_status;
     $get_img = $request->file('product_video');
     
     if($get_img){
                 $get_name_img = $get_img->getClientOriginalName();
                 $name_img = current(explode('.',$get_name_img));
                 $new_img =  $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
                 $get_img->move('public/uploads/product',$new_img);
                 $data['product_video'] = $new_img;
                 DB::table('tbl_product')->where('product_id',$product_id)->update($data);
                 Session::put('message','Cập nhật sản phẩm thành công');
                 return Redirect::to('profile');
     }
         
     DB::table('tbl_product')->where('product_id',$product_id)->update($data);
     Session::put('message','Cập nhật sản phẩm thành công');
     return Redirect::to('profile');
 }
 public function delete_product_profile($product_id){
   
     DB::table('tbl_product')->where('product_id',$product_id)->delete();
    // Session::put('message','Xóa sản phẩm thành công');
     return Redirect::to('profile');
 }


   public function home(){
       return view('homepage.homepage');
   }
   public function cate_home(){
    return view('pages.category');
}

//seo








}



