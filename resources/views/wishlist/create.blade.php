@extends('layouts.app')
@section('content')


    <div class="container" style="height:600px;">
        
             <h2>create wish</h2>
        {!! Form::open(['action'=> 'WishlistController@store','mehtod' =>'POST','enctype'=>'multipart/form-data' ]) !!}
        <div class ="form-group">
           {{Form::label('name','Customer name')}} 
           {{Form::text('name','',['class' => 'form-control','placeholder'=> 'Customer name'])}}
        </div>
        <div class ="form-group">
            {{Form::label('phonenumber','Phonenumber')}} 
            {{Form::text('phonenumber','',['class' => 'form-control','placeholder'=> 'Phonenumber'])}}
    
        </div>
        <div class ="form-group">
            {{Form::label('itemName','ItemName')}} 
            {{Form::text('itemName','',['class' => 'form-control','placeholder'=> 'ItemName'])}}
    
        </div>
        
    
         {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
        
    </div>
   
    @include('inc.footer')
@endsection
