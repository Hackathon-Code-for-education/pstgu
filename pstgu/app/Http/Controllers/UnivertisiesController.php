<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnivertisiesController extends Controller
{
    public function index()
    {
        return view('user.universities.index');
    }
}
