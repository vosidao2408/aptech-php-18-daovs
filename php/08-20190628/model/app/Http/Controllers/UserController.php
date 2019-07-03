<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    function index(){
        $users = DB::table('users')->get();
        return view('index',['users'=>$users]);
    }
    function show($id){
        $user = DB::table('users')->where('id',$id)->get();
        return view('show',['user'=>$user[0]]);
    }
    function destroy($id)
    {
        $user = DB::table('users')->where('id', $id)->delete();
        // $users = DB::table('users')->get();
        // return view('index', [
        //     'users' => $users
        // ]);
        return redirect()->route('index');
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
        DB::table('users')
            ->where('id', $id)
            ->update([
                'name' => $name,
                'email' => $email
            ]);
        // $user = DB::table('users')->where('id', $id)->get();
        // return view('show', [
        //     'user' => $user[0]
        // ]);
        return redirect()->route('show',$id);
    }
    
    function create(){
        return view('create');
    }
    function store(){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        DB::table('users')->insert([
            'name' => $name,
            'email' => $email,
            'password'=>$password
        ]);
        // $users = DB::table('users')->get();
        // return view('index',['users'=>$users]);
        return redirect()->route('index');
    }
}
