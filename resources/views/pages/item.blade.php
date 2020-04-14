@extends('layouts.app')
@section('content')

    @if(count($items)>0)
    
        <div class="row card-columns ml-5 justify-content-center ">
            @foreach ($items as $item)
        <div class="card col-xs-3 col-sm-3  m-4" >
            <img style="width:340px" class="card-img-top " src="/storage/cover_images/{{$item->cover_image}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">{{$item->title}}.</p>
              <a href="item/{{$item->id}}" class="btn btn-primary">see details</a>
            </div>
          </div>

          @endforeach
        </div>

        {{$items ->links()}}    
    @endif
    @include('inc.footer')
@endsection
