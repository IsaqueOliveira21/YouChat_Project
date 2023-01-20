<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('user.index');
        } else {
            return redirect()->back();
        }
    }

    public function index()
    {
        $users = User::all();
        return view('app.index', compact('users'));
    }
}
