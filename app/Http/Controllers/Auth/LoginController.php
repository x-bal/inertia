<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function login(Request $request)
    {
        try {
            $user = User::where('username', $request->username)->first();

            if ($user) {
                Auth::attempt($request->only(['username', 'password']));
                return redirect()->route("users.index");
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
