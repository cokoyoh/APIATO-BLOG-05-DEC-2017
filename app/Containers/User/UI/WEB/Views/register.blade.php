@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
            <form method="post" action="{{route('store_user_page')}}">
                {{csrf_field()}}
                <fieldset>
                    <legend> <h2>Register Here</h2></legend>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input type="test" class="form-control" id="name" name="name" aria-describedby="emailHelp" placeholder="Yoda Jedi">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="xyz@cytonn.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" id="password" name="password" class="form-control"  placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirm Password</label>
                        <input type="password" id="confirm-password" name="confirm-password" class="form-control"  placeholder="Type password again...">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-md btn-success ">Register</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@stop