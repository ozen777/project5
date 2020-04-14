@extends('layouts.app')
@section('content')
<style>
  .btn {
  width: 40px;
  height: 40px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.33;
  border-radius: 25px;
}
</style>
<div style = "height: 800px; ">
    <div class="ml-5">
        <a href="/item"><img src="https://img.icons8.com/android/24/000000/back.png"> </a>
    </div>
    <br>
    @if(!Auth::guest())
    
    @if(Auth::user()->id == $items->user_id)
    <div class=" container-fluid d-flex justify-content-center  text-center">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-3 text-center" >
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarNav">
              <ul class="navbar-nav ">
                <li class="nav-item  mr-3  text-center">
                    <a href="/item/{{$items->id}}/edit"><button type="button" class="btn btn-outline-info">edit </button></a>
                </li>
                <li class="nav-item active text-center">
                    {!!Form::open(['action'=>['ItemsController@destroy',$items->id],'method'=>'POST','class'=>'pull-right'])!!}
        {{Form::hidden('_method','DELETE')}}
        {{Form::submit('Delete',['class'=>'btn btn-outline-danger'])}}
        {!!Form::close()!!}
                </li>
               
              </ul>
            </div>
                
          </nav>
    </div>
   
      @endif
      @endif


     
    <div class="row justify-content-center align-items-center" style="">
    <div class="omar">

    <div id="carousel" data-interval="false"  class="carousel slide" style="margin-right:30px;" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#carousel" style="background-color:black" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" style="background-color:black" data-slide-to="1"></li>
    <li data-target="#carousel" style="background-color:black" data-slide-to="2"></li>
    <li data-target="#carousel" style="background-color:black" data-slide-to="3"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner"    style="width:500px">
    <div class="carousel-item active">
   
      <img src="/storage/cover_images/{{$items->cover_image}}"  style="width:100%; height:100%;" alt="Card image cap ">
     
    </div>
    <div class="carousel-item" >
      <img src="/storage/cover_images2/{{$items->cover_image2}}"  style="width:100%; height:100%;" alt="Card image cap ">
    </div>
    <div class="carousel-item"  >
      <img src="/storage/cover_images3/{{$items->cover_image3}}"  style="width:100%; height:100%;" alt="Card image cap" alt="">
    </div>
    <div class="carousel-item">
        <img src="/storage/cover_images4/{{$items->cover_image4}}" style="width:100%; height:100%;" alt="Card image cap" alt="">
      </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev " href="#carousel" style="background-color:black" style="margin:-60px;" data-slide="prev" >
    <span class="carousel-control-prev-icon" style="background-color:black"></span>
  </a>
  <a class="carousel-control-next" href="#carousel" style="margin:-60px;" data-slide="next">
    <span class="carousel-control-next-icon"  style="background-color:black"></span>
  </a>

</div>
</div>


<div class="card border-light mb-3" style="max-width:25rem; min-width:25rem;min-height:30rem;">
    <div class="card-header">{{$items->title}}</div>
    <div class="mt-2 ml-2">
     
<button type="button" id="button1" class="btn  btn-circle" style="background-color:{{$itemcolors1->color1}}"></button>
<button type="button" id="button2" class="btn  btn-circle" style="background-color:{{$itemcolors1->color2}}"></button>
<button type="button" id="button3" class="btn  btn-circle" style="background-color:{{$itemcolors1->color3}}"></button>
<button type="button" id="button4" class="btn  btn-circle" style="background-color:{{$itemcolors1->color4}}"></button>  
    </div>
    <div class="card-body">
      <p style="color:black">price: {{$items->price}}JD</p>
      <p class="card-text">
        {!!$items->description!!}
      </p>
    </div>
</div>

   
</div>


<div class="mt-1">
    @include('inc.footer')
</div>
 

<script type="text/javascript">
 $(document).ready(function(){
  var imageC='   <div id="carousel" data-interval="false"  class="carousel slide" style="margin-right:30px;" data-ride="carousel">  <!-- Indicators -->  <ul class="carousel-indicators">    <li data-target="#carousel" style="background-color:black" data-slide-to="0" class="active"></li>    <li data-target="#carousel" style="background-color:black" data-slide-to="1"></li>    <li data-target="#carousel" style="background-color:black" data-slide-to="2"></li>    <li data-target="#carousel" style="background-color:black" data-slide-to="3"></li>  </ul>  <!-- The slideshow -->  <div class="carousel-inner"    style="width:500px">    <div class="carousel-item active"> <img src="/storage/cover_images/{{$items->cover_image}}"  style="width:100%; height:100%;" alt="Card image cap ">         </div>    <div class="carousel-item" >      <img src="/storage/cover_images2/{{$items->cover_image2}}"  style="width:100%; height:100%;" alt="Card image cap ">    </div>    <div class="carousel-item"  >      <img src="/storage/cover_images3/{{$items->cover_image3}}"  style="width:100%; height:100%;" alt="Card image cap" alt="">    </div>    <div class="carousel-item">        <img src="/storage/cover_images4/{{$items->cover_image4}}" style="width:100%; height:100%;" alt="Card image cap" alt="">      </div>  </div>  <!-- Left and right controls -->  <a class="carousel-control-prev " href="#carousel" style="margin:-60px;" data-slide="prev" >    <span class="carousel-control-prev-icon" style="background-color:black"></span>  </a>  <a class="carousel-control-next" href="#carousel" style="margin:-60px;" data-slide="next">    <span class="carousel-control-next-icon"  style="background-color:black"></span>  </a></div>  ';
  var imageC2='  <div id="carousel" data-interval="false"  class="carousel slide" style="margin-right:30px;" data-ride="carousel">  <!-- Indicators -->  <ul class="carousel-indicators">    <li data-target="#carousel" style="background-color:black" data-slide-to="0" class="active"></li>    <li data-target="#carousel" style="background-color:black" data-slide-to="1"></li>    <li data-target="#carousel" style="background-color:black" data-slide-to="2"></li>    <li data-target="#carousel" style="background-color:black" data-slide-to="3"></li>  </ul>  <!-- The slideshow -->  <div class="carousel-inner"    style="width:500px">    <div class="carousel-item active">  <img src="/storage/cover_imagesb/{{$coverImages2->cover_imageb1}}"  style="width:100%; height:100%;" alt="Card image cap ">         </div>    <div class="carousel-item" >      <img src="/storage/cover_images2b2/{{$coverImages2->cover_imageb2}}"  style="width:100%; height:100%;" alt="Card image cap ">    </div>    <div class="carousel-item"  >      <img src="/storage/cover_images3b3/{{$coverImages2->cover_imageb3}}"  style="width:100%; height:100%;" alt="Card image cap" alt="">    </div>    <div class="carousel-item">        <img src="/storage/cover_images4b4/{{$coverImages2->cover_imageb4}}" style="width:100%; height:100%;" alt="Card image cap" alt="">      </div>  </div>  <!-- Left and right controls -->  <a class="carousel-control-prev " href="#carousel" style="margin:-60px;" data-slide="prev" >    <span class="carousel-control-prev-icon" style="background-color:black"></span>  </a>  <a class="carousel-control-next" href="#carousel" style="margin:-60px;" data-slide="next">    <span class="carousel-control-next-icon"  style="background-color:black"></span>  </a></div>  ';
  var imageC3='  <div id="carousel" data-interval="false"  class="carousel slide" style="margin-right:30px;" data-ride="carousel">  <!-- Indicators -->  <ul class="carousel-indicators">    <li data-target="#carousel" style="background-color:black" data-slide-to="0" class="active"></li>    <li data-target="#carousel" style="background-color:black" data-slide-to="1"></li>    <li data-target="#carousel" style="background-color:black" data-slide-to="2"></li>    <li data-target="#carousel" style="background-color:black" data-slide-to="3"></li>  </ul>  <!-- The slideshow -->  <div class="carousel-inner"    style="width:500px">    <div class="carousel-item active">      <img src="/storage/cover_imagesc/{{$coverImages3->cover_imagec1}}"  style="width:100%; height:100%;" alt="Card image cap ">    </div>    <div class="carousel-item" >      <img src="/storage/cover_images2c2/{{$coverImages3->cover_imagec2}}"  style="width:100%; height:100%;" alt="Card image cap ">    </div>    <div class="carousel-item"  >      <img src="/storage/cover_images3c3/{{$coverImages3->cover_imagec3}}"  style="width:100%; height:100%;" alt="Card image cap" alt="">    </div>    <div class="carousel-item">        <img src="/storage/cover_images4c4/{{$coverImages3->cover_imagec4}}" style="width:100%; height:100%;" alt="Card image cap" alt="">      </div>  </div>  <!-- Left and right controls -->  <a class="carousel-control-prev " href="#carousel" style="margin:-60px;" data-slide="prev" >    <span class="carousel-control-prev-icon" style="background-color:black"></span>  </a>  <a class="carousel-control-next" href="#carousel" style="margin:-60px;" data-slide="next">    <span class="carousel-control-next-icon"  style="background-color:black"></span>  </a></div> ';
  var imageC4='  <div id="carousel" data-interval="false"  class="carousel slide" style="margin-right:30px;" data-ride="carousel">  <!-- Indicators -->  <ul class="carousel-indicators">    <li data-target="#carousel" style="background-color:black" data-slide-to="0" class="active"></li>    <li data-target="#carousel" style="background-color:black" data-slide-to="1"></li>    <li data-target="#carousel" style="background-color:black" data-slide-to="2"></li>    <li data-target="#carousel" style="background-color:black" data-slide-to="3"></li>  </ul>  <!-- The slideshow -->  <div class="carousel-inner"    style="width:500px">    <div class="carousel-item active">      <img src="/storage/cover_imagesd/{{$coverImages4->cover_imaged1}}"  style="width:100%; height:100%;" alt="Card image cap ">    </div>    <div class="carousel-item" >      <img src="/storage/cover_images2d2/{{$coverImages4->cover_imaged2}}"  style="width:100%; height:100%;" alt="Card image cap ">    </div>    <div class="carousel-item"  >      <img src="/storage/cover_images3d3/{{$coverImages4->cover_imaged3}}"  style="width:100%; height:100%;" alt="Card image cap" alt="">    </div>    <div class="carousel-item">        <img src="/storage/cover_images4d4/{{$coverImages4->cover_imaged4}}" style="width:100%; height:100%;" alt="Card image cap" alt="">      </div>  </div>  <!-- Left and right controls -->  <a class="carousel-control-prev " href="#carousel" style="margin:-60px;" data-slide="prev" >    <span class="carousel-control-prev-icon" style="background-color:black"></span>  </a>  <a class="carousel-control-next" href="#carousel" style="margin:-60px;" data-slide="next">    <span class="carousel-control-next-icon"  style="background-color:black"></span>  </a></div>  ';
  $("#button1").click(function(){
  
    $(".omar").html(imageC);
  });

  $("#button2").click(function(){
 
    $(".omar").html(imageC2);
  });

  $("#button3").click(function(){
 
 $(".omar").html(imageC3);
});

$("#button4").click(function(){
 
 $(".omar").html(imageC4);
});
});
  </script>
@endsection
