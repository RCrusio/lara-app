<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register_user(Request $request){
        $incoming = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            ]
            
        );

        User::create($incoming);
        return 'hello tarantado ka nga tao';
    }
}
