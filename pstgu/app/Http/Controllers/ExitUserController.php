<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExitUserController extends Controller
{
    public function index()
    {
        session()->forget('email');

        return redirect()->route('main');
    }
}
