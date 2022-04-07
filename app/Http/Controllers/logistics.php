<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class logistics extends Controller
{
    public function cabinetchoice()
    {
        $currentUser = Auth::user();
        if (!$currentUser) {
            return redirect('/');
        } else {
            if ($currentUser['role_id'] == 2) {
                return view('/admin');
            } elseif ($currentUser['role_id'] == 1) {
                return view('user');
            } else {
                return redirect('/');
            }
        };
    }
}
