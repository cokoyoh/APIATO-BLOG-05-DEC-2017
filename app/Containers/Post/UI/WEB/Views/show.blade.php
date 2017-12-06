@extends('layouts.app')

@section('content')
    <div class = "container">
        <h2>{{$post->title}}</h2>
        <div class = "row">
            <div class = "panel">
                <div class = "panel-body"><p>{{$post->body}}</p> <br> <br>
                    <p>Posted {{$post->created_at->diffForHumans()}} &nbsp; &nbsp; By {{$post->user->name}}</p>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
@stop