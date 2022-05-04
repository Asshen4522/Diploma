<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public function registrate(Request $request)
    {
        user::create([
            'login' => $request->login,
            'password' => Hash::make($request->password),
            'role_id' => 1
        ]);

        return redirect('/login');
    }

    public function validation(Request $request)
    {
        $login = $request->login;

        $response = array(
            'success' => true,
        );

        $user = User::where('login', $login)->first();
        if ($user) {
            $response = array(
                'success' => false,
            );
        }

        return response()->json($response);
    }

    public function authorisate(Request $request)
    {
        if (Auth::attempt($request->only('login', 'password'))) {
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
