@extends('layouts.app')

@section('content')
<!-- slider -->

<div >



<div class="slider" >
  <div id="carouselExampleIndicators"  class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <!-- Slide One - Set the background image for this slide in the line below -->
        <div class="carousel-item active " style="background-image: url('/images/slider.jpg'); width:100%;">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4">first slide Slide</h2>
            <p class="lead">This is a description for the first slide.</p>
          </div>
        </div>
        <!-- Slide Two - Set the background image for this slide in the line below -->
        <div class="carousel-item " style="background-image: url('/images/slider22.jpg');">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4">Second Slide</h2>
            <p class="lead">This is a description for the second slide.</p>
          </div>
        </div>
        <!-- Slide Three - Set the background image for this slide in the line below -->
        <div class="carousel-item " style="background-image: url('/images/slider33.jpg');">
          <div class="carousel-caption d-none d-md-block">
            <h2 class="display-4">Third Slide</h2>
            <p class="lead">This is a description for the third slide.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
    </div>
</div>

<!-- slider -->
<hr>
<!-- first section -->
<div class="card-deck m-3 mt-4" style="height:600px">
  <div class="card">
    <img class="card-img-top" style="height:80%;" src="images/section1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">product name</h5>
      <p class="card-text">description.</p>

    </div>
  </div>
  <div class="card">
    <img class="card-img-top" style="height:80%;" src="images/section1_2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">product name </h5>
      <p class="card-text">description</p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" style="height:80%;" src="images/section1_3.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">product name </h5>
      <p class="card-text">description</p>
    </div>
  </div>
  </div>
</div>
<!-- first section -->
<hr>
<div class="container-fluid col-12 px-0  w-100 d-inline-block mt-2" style="  position: relative; text-align: center;">
  <img src="images/section2.jpg"  class="img-fluid w-100"alt="" style="height:700px">
  <div class="centered" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%);">
    some text 
  </div>
</div>
<!-- new collection -->
<hr>
<div class="container mb-5">
    <h3 class="h3">new collection </h3>
    <div class="row">
      <div class="col-md-3 col-sm-6" style="height:750px;">
        <div class="product-grid9" style="height:750px;">
            <div class="product-image9" >
                <a href="#">
                    <img class="pic-1" src="/images/section3a.jpg" style="height:500px;">
                    <img class="pic-2" src="/images/section3.jpg" style="height:500px;">
                </a>
                <a href="#" class="fa fa-search product-full-view"></a>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">item2</a></h3>
                <div class="price"> 80jd </div>
                <a class="add-to-cart" href="">view product</a>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6" style="height:750px;">
      <div class="product-grid9" style="height:750px;">
          <div class="product-image9" >
              <a href="#">
                  <img class="pic-1" src="/images/section3_2a.jpg" style="height:500px;">
                  <img class="pic-2" src="/images/section3_2.jpg" style="height:500px;">
              </a>
              <a href="#" class="fa fa-search product-full-view"></a>
          </div>
          <div class="product-content">
              <h3 class="title"><a href="#">item2</a></h3>
              <div class="price"> 80jd </div>
              <a class="add-to-cart" href="">view product</a>
          </div>
      </div>
  </div>
  <div class="col-md-3 col-sm-6" style="height:750px;">
    <div class="product-grid9" style="height:750px;">
        <div class="product-image9" >
            <a href="#">
                <img class="pic-1" src="/images/3.jpg" style="height:500px;">
                <img class="pic-2" src="/images/3.jpg" style="height:500px;">
            </a>
            <a href="#" class="fa fa-search product-full-view"></a>
        </div>
        <div class="product-content">
            <h3 class="title"><a href="#">item2</a></h3>
            <div class="price"> 80jd </div>
            <a class="add-to-cart" href="">view product</a>
        </div>
    </div>
</div>
<div class="col-md-3 col-sm-6" style="height:750px;">
  <div class="product-grid9" style="height:750px;">
      <div class="product-image9" >
          <a href="#">
              <img class="pic-1" src="/images/3.jpg" style="height:500px;">
              <img class="pic-2" src="/images/3.jpg" style="height:500px;">
          </a>
          <a href="#" class="fa fa-search product-full-view"></a>
      </div>
      <div class="product-content">
          <h3 class="title"><a href="#">item2</a></h3>
          <div class="price"> 80jd </div>
          <a class="add-to-cart" href="">view product</a>
      </div>
  </div>
</div>
    </div>
</div>
<!-- new collection -->
</div>
@include('inc.footer')
@endsection