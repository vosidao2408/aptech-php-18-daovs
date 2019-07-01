<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UsersController extends Controller
{
    function hienthiFormNguoiDung(Request $request){
        return view('form-nguoi-dung');
         $data = $request->input('name','email','password');
        return dd($data); 
    }
    function docTatCaNguoiDung(){
        $users = DB::table('users')->get();
        return view('hien-thi-form-nguoi-dung',['users'=>$users]);
    }
    function docMotNguoiDung($idNguoiDung){
        $user = DB::table('users')->where('id',$idNguoiDung)->get();
        return view('hien-thi-mot-nguoi-dung',['user'=>$user]);
    }
    function formSuaNguoiDung(){
        return view('form-sua-nguoi-dung');
    }
}
