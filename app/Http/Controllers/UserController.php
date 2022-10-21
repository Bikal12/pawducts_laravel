<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Userr;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    function register(Request $req)
    {
        $user = new Userr;
        $user->user_name = $req->input('user_name');
        $user->user_email = $req->input('user_email');
        $user->password = Hash::make($req->input('password'));
        $user->save();
        return $user;
    }
}
