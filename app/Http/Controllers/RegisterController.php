<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

use App\Models\User;

class RegisterController extends Controller
{
    //
    public function store(Request $request){
        $user = $request->all();

        User::create([
            'name'=> $user['name'],
            'email'=> $user['email'],
            'password'=> Hash::make($user['password'])
        ]);

        return response()->json(['status' => true,
                                 'msg' => 'Registro exitoso'
        ]);
    }
}
