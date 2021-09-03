@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-7 col-lg-7">
        @foreach ($status as $s)


        <div class="jumbotron">
            <div>
                <img src="https://placeimg.com/100/100/people" class="rounded-circle" alt="">
            </div>
            <h1 class="display-4">{{$s->user->name}}</h1>
            <p class="lead">{{$s->body}}</p>
          </div>
          @endforeach
    </div>
</div>
@endsection
