@extends('layouts.app')
@section('content')

<div>
    <a href="/wishlist/create"><button class="btn-primary">create wish</button></a>
</div>
    <div class="mt-2" style="height:1500px;">
        @if(count($wishlist)>0)
        <table id="mytable" class="table table-bordred table-striped">
           <thead>
               <th>customer name</th>
               <th>phone number</th>
               <th>item name</th>
               <th>created at</th>
           </thead>  
           <tbody>
           @foreach ($wishlist as $item)
              
               <tr>
                   <td>{{$item->name}}</td>
                   <td>{{$item->phonenumber}}</td>
                   <td>{{$item->itemName}}</td>
                   <td>{{$item->created_at}}</td>
                  
                   <td><a href="/wishlist/{{$item->id}}/edit" data-placement="top" data-toggle="tooltip" title="Edit"><button style="width:100px" class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><i class="fa fa-edit"></i></button></p></td>
                
                   <td>
                        {!!Form::open(['action'=>['WishlistController@destroy',$item->id],'method'=>'POST','class'=>'pull-right'])!!}
                        {{Form::hidden('_method','DELETE')}}
                        {{Form::submit('Delete',['class'=>'btn btn-danger btn-xs'])}}
                        {!!Form::close()!!}
                    </td>
                  
             
                </tr>
           @endforeach
           @endif
           </tbody>
       </table>
        </div>    
   

@include('inc.footer')
@endsection