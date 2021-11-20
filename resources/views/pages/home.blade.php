@extends('layout')

@section('content')

<div class="container">
    <h2>Discover</h2>
    <div class="slide">
       <div class="img1">
           <p>“It’s foolish to fear </br>
            what we have yet</br>
             to see and know.”</p>
           <div class="profile1">
      <img src="public/frontend/images/tanjiro.jpg" alt="">
      <span>Sky Nguyễn</span>
      <i>.52K view</i>
    </div>
       </div>
       <div class="img2">
           <p>
            “There’s no such </br>
            thing as a free wish.”
           </p>
        <div class="profile1">
            <img src="public/frontend/images/todoroki.jpg" alt="">
            <span>Todoroki</span>
            <i>.45K view</i>
          </div>
       </div>
    </div>

        <div class="anime">
          @foreach ($all_product as $key => $product)
          
          <div class=anime1>
            <div class="animes"><a href="{{URL::to('/chi-tiet-anime/'.$product->product_id)}}"><img src="{{URL::to('public/uploads/product/'.$product->product_img)}}" stt="ee1"alt="" srcset=""></a> </div>
            <div class="nar"><h3>{{$product->product_name}}</h3>
             <div class="admin">
                 <img src="{{URL::to('public/images/avatar/'.$product->bloger_avt)}}" alt="">
                 <span>{{$product->bloger_name}}</span>
             </div> 
         </div>
           
           
              </div>
        
              @endforeach
  
            <!--    <div class=anime1>
               <div class="animes"><a href=""><img src="https://i.pinimg.com/originals/5f/28/e3/5f28e357899f33b6f02ec2de67b08fe3.jpg" stt="ee1"alt="" srcset=""></a> </div>
               <div class="nar"><h3>Onepice</h3>
                <div class="admin">
                    <img src="https://c.wallhere.com/photos/5d/13/women_anime_girls_portrait_display_artwork_digital_art_2D_looking_at_viewer_fangs-1497575.jpg!d" alt="">
                    <span>Kaneki</span>
                </div> 
            </div>
              
              </div>
            <div class=anime1>
                <div class="animes"><a href=""><img src="public/frontend/images/drgball.jpg"stt="2" alt="" srcset=""></a> </div>
                <div class="nar"><h3>Dragon Ball</h3>
                    <div class="admin">
                        <img src="https://static4.aniimg.com/upload/20181104/5774/Y/w/B/YwBlEF.jpg" alt="">
                        <span>Obito</span>
                    </div> 
                </div>
              
              </div>
              <div class=anime1>
                <div class="animes mo"><a href=""><img src="https://s199.imacdn.com/ta/2017/03/03/392b3cecbe11ab94_641c16829005f87f_34539714885061647143215.jpg" stt="3"alt="" srcset=""></a> </div>
                <div class="nar"><h3>Fairy Tail</h3>
                    <div class="admin">
                        <img src="https://i.pinimg.com/564x/f2/16/40/f216407991c291b4a6eb3cd21d569948.jpg" alt="">
                        <span>Shisui</span>
                    </div> 
                </div>
              
              </div>
              </div>-->
    </div>

    
@endsection