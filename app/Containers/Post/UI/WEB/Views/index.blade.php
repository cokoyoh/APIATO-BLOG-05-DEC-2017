@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h2>Blog Posts</h2></div>

                    <div class="panel-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                            <div class = "row">
                                @foreach($posts as $post)
                                    <div class = "panel">
                                        <div class = "panel-header">
                                            <div class = "panel-heading">
                                                <h4>
                                                    <a href = "{{$post->path()}}">
                                                        {{$post->title}}
                                                    </a>
                                                </h4>
                                            </div>
                                        </div>
                                        <div class = "panel-body">{{$post->body}} <br> <br>
                                           <div class="row">
                                               <div class="col-md-8">
                                                   <p>Posted {{$post->created_at->diffForHumans()}} &nbsp; &nbsp; By {{$post->user->name}}</p>
                                               </div>
                                               <div class="col-md-4">
                                                   @if($post->user_id == \Illuminate\Support\Facades\Auth::user()->id)
                                                       <a href = "{{$post->path()}}/edit" type="button" class="btn btn-sm btn-info pull-right">Edit</a>
                                                       {{--<a href="#" type="button" class="btn btn-sm btn-danger">Delete</a>--}}
                                                       <form class="form-group pull-right" action="{{$post->path()}}" METHOD="post">
                                                           {{csrf_field()}}
                                                           {{method_field('DELETE')}}
                                                           <button type="submit" class="btn btn-sm btn-danger" value="delete">Delete</button>
                                                       </form>
                                                   @endif
                                               </div>
                                           </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            {{$posts->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
