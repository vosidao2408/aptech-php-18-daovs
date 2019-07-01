<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function createUser(){
        return view('create');
    }
    function index(){
        $users = DB::table('users')->get();
        return view('index',['users'=>$users]);
    }
    function show($idUser){
        $user = DB::table('users')->where('id',$idUser)->get();
        return view('show',['user'=>$user[0]]);
    }
    function destroy($id)
    {
        $user = DB::table('users')->where('id', $id)->delete();
        $users = DB::table('users')->get();
        return view('index', [
            'users' => $users
        ]);
    }
    function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->get();
        return view('edit', [
            'user' => $user[0]
        ]);
    }
    function update($id)
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        // $_GET $_POST
        DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'email' => $email
            ]);
        $user = DB::table('users')->where('id', $id)->get();
        return view('show', [
            'user' => $user[0]
        ]);
    }
}
