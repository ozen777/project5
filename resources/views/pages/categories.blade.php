@extends('layouts.app')
@section('content')

    <div class = "row">
        <div class = "col-md-8">
            @foreach ($categories as $category)
                <p>{{$category->id}}</p>
                <p>{{$category->name}}</p>

            @endforeach
        </div>
    </div>
    
@include('inc.footer')
@endsection