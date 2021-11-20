@extends('layout_bloger')

@section('bloger_content')

<?php
$message = Session::get('message');
if($message){
    echo '<span class="text-alert">'.$message.'</span>';
    Session::put('message',null);
}
?>
<form id="login-form" class="form" action="{{route('register')}}" method="post" enctype="multipart/form-data">
    @csrf <!-- {{ csrf_field() }} -->
	@foreach($errors->all() as $val)
			<ul>
				<li>{{$val}}</li>
			</ul>
			@endforeach
    <h3 class="text-center text-info">Login</h3>
    <?php
    $message = Session::get('message');
    if($message){
      echo '<span class="text-alert" style="color:red;margin-top:-50px;">'.$message.'</span>';
      Session::put('message',null);
    }
    ?>
    <div class="form-group">
        <label for="username" class="text-info">Username:</label><br>
        <input type="text" name="bloger_name" id="username" class="form-control">
    </div>
    <div class="form-group">
        <label for="username" class="text-info">Email:</label><br>
        <input type="text" name="bloger_email" id="email" class="form-control">
    </div>
    <div class="form-group">
        <label for="password" class="text-info">Password:</label><br>
        <input type="password" name="bloger_password" id="password" class="form-control">
    </div>
    <div class="form-group">
        <label for="avatar" class="text-info">Avatar:</label><br>
        <input type="file" name="bloger_avt" id="avatar" class="form-control inputavatar">
        <label for="file">Choose Avatar</label>
    </div>
    <div class="form-group">
       
        <input type="submit" name="submit" class="btn btn-info btn-md" value="submit">
    </div>
    <div id="register-link" class="text-right">
        <a href="{{URL::to('/')}}" class="text-info"> Login here</a>
    </div>
    <script>
        <input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple />
        var inputs = document.querySelectorAll( '.inputfile' );
      Array.prototype.forEach.call( inputs, function( input )
      {
          var label	 = input.nextElementSibling,
              labelVal = label.innerHTML;
      
          input.addEventListener( 'change', function( e )
          {
              var fileName = '';
              if( this.files && this.files.length > 1 )
                  fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
              else
                  fileName = e.target.value.split( '\\' ).pop();
      
              if( fileName )
                  label.querySelector( 'span' ).innerHTML = fileName;
              else
                  label.innerHTML = labelVal;
          });
      });
      </script>
</form>



@if (session('success'))
    {{session('success')}}
@endif
@endsection
