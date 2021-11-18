<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Http\Requests;
use Illuminate\support\Facades\Redirect;

session_start();


class CategoryProduct extends Controller
{
   

    public function add_category_product(){
        $this ->AuthLogin();
        return view('admin.add_category_product');
    }

    public function all_category_product(){
$this->AuthLogin();
    $all_category_product = DB::table('tbl_category_product')->get();
    $manager_category_product = view('admin.all_category_product')->with('all_category_product',$all_category_product);
    return view('admin_layout')->with('admin.all_category_product',
    $manager_category_product);

      
    }
    public function save_category_product(Request $request){
        $this->AuthLogin();
        $data = array();
        $data['category_product_name'] = $request->category_product_name;
        $data['category_product_keywords'] = $request->category_product_keywords;
        $data['slug_category_product'] = $request->slug_category_product;
        $data['category_product_desc'] = $request->category_product_desc;
        $data['category_product_status'] = $request->category_product_status;
        $data['category_product_icon'] = $request->category_product_icon;

        DB::table('tbl_category_product')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công');
       
        return Redirect::to('add-category-product');
        }
       

   public function unactive_category_product($category_product_id){

    DB::table('tbl_category_product') -> where('category_id', $category_product_id) -> update(['category_product_status'=>1]);
    Session::put('message','Tắt danh mục thành công');
     return Redirect::to('all-category-product');

   }
   public function active_category_product($category_product_id){
    DB::table('tbl_category_product') -> where('category_id', $category_product_id) -> update(['category_product_status'=>0]);
    Session::put('message','Bật danh mục thành công');
     return Redirect::to('all-category-product');
}
public function edit_category_product($category_product_id){
	$edit_category_product = DB::table('tbl_category_product')->where('category_id',$category_product_id)->get();
    	$manager_category_product  = view('admin.edit_category_product')->with('edit_category_product',$edit_category_product);
    	return view('admin_layout')->with('admin.edit_category_product', $manager_category_product);

}
public function update_category_product(Request $request,$category_product_id){
    $data = array();
    $data['category_product_name'] = $request -> category_product_name;
    $data['category_product_desc'] = $request -> category_product_desc;
    DB::table('tbl_category_product') -> where('category_id', $category_product_id) -> update($data);
    Session::put('message','Sửa danh mục thành công');
    return Redirect::to('all-category-product');

}
public function delete_category_product($category_product_id){
    DB::table('tbl_category_product') -> where('category_id', $category_product_id) -> delete($data);
    Session::put('message','Xóa danh mục thành công');
    return Redirect::to('all-category-product');

}
// the loai san pham
public function show_category_home(Request $request ,$slug_category_product){
  
    $cate_product = DB::table('tbl_category_product')->where('category_product_status','0')->orderby('category_id','desc')->get();
    $bloger_product = DB::table('tbl_bloger')->where('bloger_status','1')->orderby('bloger_id','desc')->get();
    $category_by_id = DB::table('tbl_product')->join('tbl_category_product','tbl_product.category_id','=','tbl_category_product.category_id')
    ->where('tbl_category_product.slug_category_product',$slug_category_product)
    ->join('tbl_bloger','tbl_bloger.bloger_id','=','tbl_product.bloger_id')
    ->orderby('product_id','desc')->limit(4)->get();
   
  /*  foreach($category_by_id as $key => $val){
    //seo
    $meta_desc = $val->category_desc;
    $meta_keywords = $val->meta_keywords;
    $meta_title = $val->category_name;
    $url_canonical = $request->url();

    //--seo
    }*/
   
    $category_name = DB::table('tbl_category_product')
    ->where('tbl_category_product.slug_category_product',$slug_category_product)
    ->limit(1)->get();
    return view('pages.show_category')->with('category',$cate_product)
    ->with('bloger',$bloger_product)
    ->with('category_by_id',$category_by_id)
    ->with('category_name',$category_name);
  
    }

public function AuthLogin(){
    $admin_id = Session::get('admin_id');
    if($admin_id){
    return Redirect::to('dashboard');
    }else{
    return Redirect::to('admin')->send();
    }
    }
   
}



