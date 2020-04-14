@extends('layouts.app')
@section('content')
    <h2>edit item</h2>
    {!! Form::open(['action'=> ['ItemsController@update',$items->id],'mehtod' =>'POST','enctype'=>'multipart/form-data' ]) !!}
    <div class=  "form-group">
       {{Form::label('title','Title')}} 
       {{Form::text('title',$items->title,['class' => 'form-control','placeholder'=> 'Title'])}}
    </div>
    <div class = "form-group">
        {{Form::label('itemID','ItemID')}} 
        {{Form::text('itemID',$items->itemID,['class' => 'form-control','placeholder'=> 'ItemID'])}}
     </div>
     <div class = "form-group">
      {{Form::label('category_id','Category:')}} 
      
      {{Form::select('category_id',$categories,null,['class'=>'form-control'])}}

      <div class ="form-group">
         {{Form::label('price','Price')}} 
         {{Form::text('price',$items->price,['class' => 'form-control','placeholder'=> 'price'])}}
 
     </div>
   </div>
     <div class="form-group">
        {{Form::file('cover_image')}}
     </div>

     <div class="form-group">
      {{Form::file('cover_image2')}}
      
   </div>

   <div class="form-group">
      {{Form::file('cover_image3')}}
      
   </div>
   
   <div class="form-group">
      {{Form::file('cover_image4')}}
   </div>

     {{Form::hidden('_method','PUT')}}
     {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    @include('inc.footer')
    @endsection
