<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->get();
        return view('welcome', ['users' => $users]);
    }
}
