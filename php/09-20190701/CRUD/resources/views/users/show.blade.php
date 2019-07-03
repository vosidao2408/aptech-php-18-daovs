@extends('users.app')
@section('sidebar')
@parent
<table class="table table-dark table-striped table-hover table-bordered text-center">
    <thead>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    <td>{{$user->id}}</td>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    </tr>
    </tbody>
    </table>
@endsection