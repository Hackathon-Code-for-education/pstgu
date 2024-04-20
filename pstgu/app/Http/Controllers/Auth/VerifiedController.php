<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class VerifiedController extends Controller
{
    public function index()
    {
        $verified = User::where('email', session('email'))->first()->verified;

        if ($verified === 1) {
            return redirect()->route('user');
        }

        return view('verified.index');
    }
}
