<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;






class UserController extends Controller
{

    //
    function login(Request $req)
    {

        // return $req->input();
        //     return User::where(
        // ["email"=> $req->email,
        // "password"=> $req->password
        // ])->first();


        $user = User::where(["email" =>$req->email])->first();
        // return $user->password;
        if (!$user || !Hash::check($req->password, $user->password)) {
            return redirect("/");

            // return "Username or password is not matched";
        } else {
            return "Username or password is not matched";
            // $req->session()->put('User', $user);
            // return redirect("/");

        }
    }
}
