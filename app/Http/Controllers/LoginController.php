<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

use App\Models\User;

class LoginController extends Controller
{
    public function check(Request $request){
        $credenciales = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credenciales)){
            return response()->json(['status'=>true,
                                     'msg'=>'Ingreso exitoso'
            ]);
        }

            return response()->json(['status'=>false,
                                     'msg'=>'Ingreso fallido'
        ]);
    }
}
