@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-md-10 col-md-offset-1">
            <h2>Create Post Here</h2>
            <form method="POST" action="{{route('web_post_store')}}">
                {{ csrf_field() }}
                <fieldset>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Blog Title</label>
                        <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" placeholder="Blog Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Body</label>
                        <textarea class="form-control" id="body" name="body" rows="8" placeholder="What's on your mind?"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" value="submit" class="btn btn-success">Add</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@stop