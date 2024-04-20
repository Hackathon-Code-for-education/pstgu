<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;

class UnivertisiesController extends Controller
{
    public function index(Request $request)
    {
        $universities = University::all();

        return view('user.universities.index', [
            'search' => $request->s,
            'universities' => $universities,
        ]);
    }

    public function show($name)
    {
        return $name;
    }
}
