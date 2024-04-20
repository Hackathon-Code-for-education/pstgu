<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnivertisiesController extends Controller
{
    public function index(Request $request)
    {
        $universities = [
            (object) [
                'name' => 'Право',
                'nameShort' => 'ПСТГУ',
                'url' => 'pstgu'
            ],
            (object) [
                'name' => 'Право',
                'nameShort' => 'ПСТГУ',
                'url' => 'pstgu'
            ],
            (object) [
                'name' => 'Право',
                'nameShort' => 'ПСТГУ',
                'url' => 'pstgu'
            ],
        ];

        return view('user.universities.index', [
            'search' => $request->s,
            'universities' => $universities
        ]);
    }

    public function show($name)
    {
        return $name;
    }
}
