@extends('layouts.admin')

@section('content')


    <div class="container">
        <div class="row">
           
                <div class="col">
                    <div class="card">
                        <p>{{$projects->title}}</p>
                        <img  src="{{$projects->cover_image}}" alt="{{$projects->title}}">
                    </div>
                </div>
            
        </div>
    </div>
@endsection