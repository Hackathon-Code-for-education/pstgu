<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use App\Models\University;
use App\Models\View;
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
        $uni = University::where('url', $name)->where('active', 1)->firstOrFail();

        $photos = View::where('active', 1)->where('university', $uni->id)->get();

        $feedbacks = Feedback::where('active', 1)->where('university', $uni->id)->get();

        return view('user.uni.index', [
            'uni' => $uni,
            'photos' => $photos,
            'feedbacks' => $feedbacks,
        ]);
    }
}
