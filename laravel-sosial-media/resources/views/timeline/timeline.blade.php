@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-7 col-lg-7">
        @foreach ($status as $s)
        <div class="jumbotron">
            <div class="card" style="width: 18rem;">
                <img src="https://placeimg.com/100/100/people" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{$s->user->name}}</h5>
                  <p class="card-text">{{$s->body}}</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{$s->created_at}}</li>
                </ul>
          </div>
        </div>
          @endforeach
    </div>
    <div class="col-md-4 col-lg-4">
        <h3 class="text-center mt-4">Your friends</h3>
        @foreach (Auth::user()->follows()->limit(5)->get() as $follow)
            <p>{{$follow->name}}</p>
            <p>{{$follow->pivot->created_at->diffForHumans()}}</p>
        @endforeach
    </div>
</div>
@endsection
