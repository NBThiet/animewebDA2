<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Session;
use App\Slider;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class BlogerController extends Controller
{
   /* public function AuthLogin(){
        $admin_id = Session::get('bloger_id');
        if($admin_id){
            return Redirect::to('layout');
        }else{
            return Redirect::to('login')-> send();
        }
    }*/

    public function index(){
        return view('auth.signin_bloger');
    }
    
    public function all_bloger(){
      
    	$all_product = DB::table('tbl_product')
        ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_product.category_id')
        ->join('tbl_bloger','tbl_bloger.bloger_id','=','tbl_product.bloger_id')
       // ->join('tbl_comment','tbl_comment.comment_id','=','tbl_product.comment_id')
        ->orderby('tbl_product.product_id','desc')->paginate(5);
    	$manager_product  = view('admin.all_bloger')->with('all_bloger',$all_product);
    	
    	return view('admin_layout')->with('admin.all_bloger', $manager_product);
    

    }
  
  public function showregister(){

    return view('auth.signup_bloger');
  }
  
  public function register(Request $request){

    $bloger = array();

    $bloger['bloger_name'] = $request->bloger_name;
    $bloger ['bloger_email'] = $request->bloger_email;
    $bloger ['bloger_password'] = bcsqrt($request->bloger_password);
    $bloger ['bloger_avt'] = $request->bloger_avt;

    $get_avatar = $request->file('bloger_avt');
        
    if($get_avatar){
        $get_name_avatar = $get_avatar->getClientOriginalName();
        $name_avatar = current(explode('.',$get_name_avatar));
        $new_avatar =  $name_avatar.rand(0,99).'.'.$get_avatar->getClientOriginalExtension();
        $get_avatar->move('public/images/avatar',$new_avatar);
        $bloger['bloger_avt'] = $new_avatar;
        DB::table('tbl_bloger')->insert($bloger);
        Session::put('message','Đăng kí tài khoản thành công, mời bạn đăng nhập');
        return Redirect::to('register');
    }else{
    $bloger['bloger_avt'] = '';
    DB::table('tbl_bloger')->insert($bloger);
    Session::put('message','Đăng kí tài khoản thành công, mời bạn đăng nhập');
    return Redirect::to('');
}
  }
  
  public function login( Request $request)
  {
    //  $this ->AuthLogin();

  $bloger_email = $request->bloger_email;
  $bloger_password = bcsqrt($request->bloger_password);

  $result = DB::table('tbl_bloger')->where('bloger_email', $bloger_email) ->where('bloger_password', $bloger_password)->first();

if($result){
   Session::put('bloger_name',$result ->bloger_name);
   Session::put('bloger_id', $result ->bloger_id);
   Session::put('bloger_avt',$result ->bloger_avt);
   return Redirect::to('/homepage');


}else{
  Session::put('message', 'Mật khẩu hoặc tài khoản không đúng, vui lòng thử lại');
  return Redirect::to('/');

}

  }
  
  public function logout(){

    Session::put('bloger_name', null);
    Session::put('bloger_id', null);
    return Redirect::to('/');

}
  
  
  
}
  
  
  
  
  
  
   /*
  
    public function index()
    {
        return view('auth.bloger_login');
    }

        
 public function save_bloger(Request $request){
            $this->AuthLogin();
           $data = array();
           $data['bloger_name'] = $request -> bloger_name;
        $data['bloger_email'] = $request -> bloger_email;
        $data['bloger_password'] = $request -> bloger_password;
        $data['bloger_phone'] = $request -> bloger_phone;
           $data['bloger_avt'] = $request->product_status;
           $get_img = $request->file('bloger_avt');
         
           if($get_img){
               $get_name_img = $get_img->getClientOriginalName();
               $name_img = current(explode('.',$get_name_img));
               $new_img =  $name_img.rand(0,99).'.'.$get_img->getClientOriginalExtension();
               $get_img->move('public/uploads/product',$new_img);
               $data['bloger_avt'] = $new_img;
               DB::table('tbl_product')->insert($data);
               Session::put('message','Thêm sản phẩm thành công');
               return Redirect::to('/discover');
           }
           $data['bloger_avt'] = '';
           DB::table('tbl_product')->insert($data);
           Session::put('message','Thêm sản phẩm thành công');
           return Redirect::to('/discover');
       }
    }
       
      if($request ->isMethod('post')){
          $Validator = Validator::make($request->all(),[
              'bloger_name' => 'Required|min:3|max:30|alpha',
              'bloger_email' => 'Required|email',
              'bloger_avt' => 'Required|image|maimes:jpg,png,gif,jpeg|max:100000',
              'bloger_password' => 'Required|confirmed|min:8|max:30',

          ]);
          if($Validator -> fails()) {
              return redirect() ->back()
              ->withErrors($Validator)
              ->withInput();
          }
          if($request->hasFiles('bloger_avt')){
              $files = $request ->files('bloger_avt');
              $destination_Path = public_path('images/avatar');
              $file_Name = time() .'_'. $file -> getClientOriginalname();
              $file ->move($destination_Path, $file_Name);
          }else{
              $file_Name='noname.jpg';
          }
            $bloger = DB::table('tbl_bloger')->where('bloger_email',$request->bloger_email)->first();
            if(!$bloger){
                $newbloger = new bloger();
                $newbloger -> bloger_name = $request->bloger_name;
                $newbloger -> bloger_email = $request->bloger_email;
                $newbloger -> bloger_password = $request->bloger_password;
                $newbloger -> bloger_avt = $file_Name;
                $newbloger -> save();
                return redirect()-> route('auth.layout_login')->with('message','ban da tao tai khoan thanh cong, moi ban dang nhap');


            }else{
                return redirect()-> route('auth.layout_login')->with('message','tai khoan da ton tai, moi ban dang nhap');

            }
      }
    }
    */

