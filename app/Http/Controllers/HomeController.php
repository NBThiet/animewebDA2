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
  

   public function profile(){
   
    $cate_product = DB::table('tbl_category_product')
    ->where('category_product_status','0')->orderby('category_id','desc')->get();

    $all_product_profile = DB::table('tbl_bloger')
   
    ->join('tbl_product','tbl_product.product_id','=','tbl_bloger.product_id')
   // ->join('tbl_comment','tbl_comment.comment_id','=','tbl_product.comment_id')
    ->orderby('tbl_product.product_id','desc')->paginate(5);
   

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
   ->join('tbl_bloger','tbl_bloger.bloger_id','=','tbl_product.bloger_id')
   ->get(); 
   if($search_product){
   return view('pages.search')->with('category',$cate_product)
   ->with('bloger',$bloger_product)->with('search_product',$search_product);
   }else{
      Session::put('mess','Khong tim thay ket qua tim kiem');
   }
   }
  


   public function home(){
       return view('homepage.homepage');
   }
   public function cate_home(){
    return view('pages.category');
}

//seo








}



