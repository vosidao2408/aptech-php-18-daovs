@extends('users.app')
@section('sidebar')
@parent

<div class="container w-25">
        <div class="row">
            <div class="col-12">
                <form action="{{asset('/users/'.$user->id)}}" method="POST">
                <input type="hidden" name="_method" value="PUT">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                        <input type="text" class="form-control my-2" name="name" placeholder="Name" value="{{$user->name}}">   
                        <input type="email" class="form-control my-2" name="email" placeholder="Email address" value="{{$user->email}}">
                        <button class="btn btn-lg btn-primary my-2" type="submit" style="width:100%;">Submit</button>  
                </form>
            </div>
        </div>
    </div>
    @endsection