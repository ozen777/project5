@extends('layouts.app')
@section('content')
<div style="height:1500px">
 

  @if(count($showcat)>0)
        <div class="row card-columns ml-5 justify-content-center " style="max-width:3050px">
            @foreach ($showcat as $showcats)
           @if (($showcat1==$showcats->category->name) && ($subcat==$showcats->category_sub))
           <div class=" col-xs-4 col-sm-2  m-4 card border-0" style="min-width:150px;"  >
            <a href="/item/{{$showcats->id}}">
                <img  class="card-img-top"
                 src="/storage/cover_images/{{$showcats->cover_image}}" style="width:100%;" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title text-center">{{$showcats->title}}</h5>
            </div>
          </div>
           <br>
                    
          @continue
           @endif
           
   
          @endforeach
        </div>
  
    @endif
  </div>   

    @include('inc.footer')
@endsection
