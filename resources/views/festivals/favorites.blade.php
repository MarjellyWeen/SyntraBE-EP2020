@extends('template.index')

@section('content')
    
<div class="container favorites">

    <p> HELLO</p>
    {{$username}}

        <div class="favorites"></div>
        <div class="row row-cols-1 row-cols-md-5">
            @foreach($festivals as $festival)
            <div class="col mb-1">
                <div class="card">
                    <img src="{{$festival->img}}" class="card-img-top" alt="{{$festival->name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$festival->name}}</h5>
                        <p class="card-text">{{$festival->country}}</p>
                        <p class="card-text"><small class="text-muted">{{$festival->city}}</small></p>
                        <p>Date: from {{$festival->from}} to {{$festival->til}}</p>
                        <p>Festival homepage: <a href="{{$festival->URL}}"> {{$festival->name}}</a></p>
        
                        <a class="btn btn-info" (click)="deleteFav(festival.id)">Remove</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</div>
        
</div>

@endsection