@extends('layout_bloger')

@section('bloger_content')
<!--
<form id="login-form" class="form" action="{{route('login')}}" method="post"enctype="multipart/form-data">
    @csrf <!-- {{ csrf_field() }} -
  

    <h3 class="text-center text-info">Login</h3>
    <div class="form-group">
        <label for="email" class="text-info">Email:</label><br>
        <input type="text" name="bloger_email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password" class="text-info">Password:</label><br>
        <input type="password" name="bloger_password" id="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
        <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
    </div>
    <div id="register-link" class="text-right">
        class="text-info">Register here</a>
    </div>
</form>
-->

<form id="login-form" class="form" action="{{route('login')}}" method="post"enctype="multipart/form-data">
      @csrf <!-- {{ csrf_field() }} -->
    <!--   con = Container  for items in the form-->
    <div class="con">
    <!--     Start  header Content  -->
    <header class="head-form">
       <h2>Log In</h2>
       <!--     A welcome message or an explanation of the login form -->
       <p>login here using your username and password</p>
    </header>
    <!--     End  header Content  -->
    <br>
    <div class="field-set">
      
       <!--   user name -->
          <span class="input-item">
            <i class="fa fa-user-circle"></i>
          </span>
         <!--   user name Input-->
          <input class="form-input" id="txt-input" name="bloger_email"type="text" placeholder="@UserName" required >
      
       <br>
      
            <!--   Password -->
      
       <span class="input-item">
         <i class="fa fa-key"></i>
        </span>
       <!--   Password Input-->
       <input class="form-input" type="password" placeholder="Password" id="pwd"  name="bloger_password" required>
      
 <!--      Show/hide password  -->
      <span>
         <i class="fa fa-eye" aria-hidden="true"  type="button" id="eye"></i>
      </span>
      
      
       <br>
 <!--        buttons -->
 <!--      button LogIn -->
       

       <button class="log-in"> Log In </button>
    </div>
   
 <!--   other buttons -->
    <div class="other">
 <!--      Forgot Password button-->
       <button class="btn submits frgt-pass"style="margin-left:-3px;">Forgot Password</button>
 <!--     Sign Up button -->
  <span style="margin-top:20px;margin-left:2px;" class="btn submits sign-up"><a href="{{URL::to('/register')}}">Sign Up  </a>
 <!--         Sign Up font icon -->
     
       <i class="fa fa-user-plus" aria-hidden="true"></i>
       </span>
 <!--      End Other the Division -->
    </div>
      
 <!--   End Conrainer  -->
   </div>
   
   <!-- End Form -->
 </form>
@endsection