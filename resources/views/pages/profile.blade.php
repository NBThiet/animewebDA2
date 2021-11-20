@extends('layout')

@section('content')
      
   <div class="animetable">
    <h1 class="mucprf">Profile</h1>
    
     <div class="imgpr">
        <img src="{{URL::to('public/images/avatar/'.Session::get('bloger_avt'))}}" alt="">
        <h2> <?php
          $name = Session::get('bloger_name');
          if($name){
              echo $name;
              
          }
          ?></h2>
     </div>
     <div class="tablepost">
      <table class="table table-hover">
        <thead>
          <tr>
      
            <th scope="col">Anime Name</th>
           
          </tr>
        </thead>
        <tbody>
          @foreach($all_product_profile as $key => $product)
          <tr>
           
            <td>{{$product ->product_name}}</td>
            <td class="ti-more-alt"></td>
          </tr>
         
         @endforeach
        </tbody>
      </table>
     </div>
    
   </div >
@endsection