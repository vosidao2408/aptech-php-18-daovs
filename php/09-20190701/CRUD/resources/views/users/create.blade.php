@extends('users.app')
@section('sidebar')
@parent
<div class="container w-25">
        <div class="row">
            <div class="col-12">
                <form action="{{asset('/users/')}}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}"> 
                        <input type="text" class="form-control my-2" name="name" placeholder="Name">   
                        <input type="email" class="form-control my-2" name="email" placeholder="Email address">
                        <input type="password" class="form-control my-2" name="password" placeholder="Password">
                        <button class="btn btn-lg btn-primary my-2" type="submit" style="width:100%;">Create User</button>  
                </form>
            </div>
        </div>
    </div>
    @endsection