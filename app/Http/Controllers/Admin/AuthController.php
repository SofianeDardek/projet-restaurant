<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth');
    }

    public function auth(Request $request)
    {
        $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        $result = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if($result == true){
            return redirect(route('admin.home'));
        } else {
            return back()->withErrors([
                'email' => "Email ou mot de passe invalide",
            ]);
        }
    }
}
