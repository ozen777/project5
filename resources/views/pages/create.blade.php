@extends('layouts.app')
@section('content')


    <div class="container">
        
             <h2>create item</h2>
        {!! Form::open(['action'=> 'ItemsController@store','mehtod' =>'POST','enctype'=>'multipart/form-data' ]) !!}
        <div class ="form-group">
           {{Form::label('title','Title')}} 
           {{Form::text('title','',['class' => 'form-control','placeholder'=> 'Title'])}}
        </div>
        <div class ="form-group">
            {{Form::label('itemID','ItemID')}} 
            {{Form::text('itemID','',['class' => 'form-control','placeholder'=> 'ItemID'])}}
    
        </div>
        <div class ="form-group">
            {{Form::label('price','Price')}} 
            {{Form::text('price','',['class' => 'form-control','placeholder'=> 'price'])}}
    
        </div>

        <div class ="form-group">
            {{Form::label('description','Description')}} 
            {{Form::textarea('description','',['id'=>'editor','class' => 'form-control','placeholder'=> 'description'])}}
    
        </div>
        
        <div class ="form-group">
            {{Form::label('cetegory_id','Category')}} 
            <select class="form-control selectpicker" name="category_id"  >
           
                <option value="1">men</option>
                <option value="2">female</option>
                <option value="3">footwear</option>
                <option value="4">bags</option>
                <option value="5">accessories</option>
           
            
            </select>
    
        </div>
        <div class ="form-group">
            {{Form::label('cetegory_sub','Sub category')}} 
            <select class="form-control selectpicker" name="category_sub"  >
                <option value="sub1">sub1</option>
                <option value="sub2">sub2</option>
                <option value="sub3">sub3</option>
                <option value="sub4">sub4</option>
                <option value="sub5">sub5</option>
            </select>
    
        </div>

        <div class ="form-group">
            {{Form::label('itemcolor_id','Choose color')}} 
            <select class="form-control selectpicker" name="itemcolor_id"  >
                <option value="none">none</option>
                <option value="#000000">black</option>
                <option value="#003300">green</option>
                <option value="#0000ff">blue</option>
                <option value="#F0E68C">Khaki</option>
            </select>
            <div class="container-fluid row">
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
            </div>
           
            </div>

            <div class ="form-group">
                {{Form::label('itemcolor_id2','Choose color')}} 
                <select class="form-control selectpicker" name="itemcolor_id2"  >
                    <option value="none">none</option>
                    <option value="#000000">black</option>
                    <option value="#003300">green</option>
                    <option value="#0000ff">blue</option>
                    <option value="#F0E68C">Khaki</option>
                </select>
                <div class="container-fluid row">
                    <div class="form-group">
                        {{Form::file('cover_imageb1')}}
                     </div>
                     
                     <div class="form-group">
                        {{Form::file('cover_image2b2')}}
                     </div>
        
                     <div class="form-group">
                        {{Form::file('cover_image3b3')}}
    
                     </div>
                     <div class="form-group">
                        {{Form::file('cover_image4b4')}}
          
                     </div>
                </div>
               
                </div>

                <div class ="form-group">
                    {{Form::label('itemcolor_id3','Choose color')}} 
                    <select class="form-control selectpicker" name="itemcolor_id3"  >
                        <option value="none">none</option>
                        <option value="#000000">black</option>
                        <option value="#003300">green</option>
                        <option value="#0000ff">blue</option>
                        <option value="#F0E68C">Khaki</option>
                    </select>
                    <div class="container-fluid row">
                        <div class="form-group">
                            {{Form::file('cover_imagec1')}}
                         </div>
                         
                         <div class="form-group">
                            {{Form::file('cover_image2c2')}}
                         </div>
            
                         <div class="form-group">
                            {{Form::file('cover_image3c3')}}
        
                         </div>
                         <div class="form-group">
                            {{Form::file('cover_image4c4')}}
              
                         </div>
                    </div>
                   
                    </div>

                    <div class ="form-group">
                        {{Form::label('itemcolor_id4','Choose color')}} 
                        <select class="form-control selectpicker" name="itemcolor_id4"  >
                            <option value="none">none</option>
                            <option value="#000000">black</option>
                            <option value="#003300">green</option>
                            <option value="#0000ff">blue</option>
                            <option value="#F0E68C">Khaki</option>
                        </select>
                        <div class="container-fluid row">
                            <div class="form-group">
                                {{Form::file('cover_imaged1')}}
                             </div>
                             
                             <div class="form-group">
                                {{Form::file('cover_image2d2')}}
                             </div>
                
                             <div class="form-group">
                                {{Form::file('cover_image3d3')}}
            
                             </div>
                             <div class="form-group">
                                {{Form::file('cover_image4d4')}}
                  
                             </div>
                        </div>
                       
                        </div>
            
         {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        {!! Form::close() !!}
        
    </div>
    
 

    @include('inc.footer')
@endsection
