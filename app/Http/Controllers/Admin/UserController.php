<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.users.user');
    }

    public function store(Request $request, User $user)
    {
        $request->validate([
            'username' => ['required'],
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'L\'utilisateur a été crée avec succès');

        
    }
}
