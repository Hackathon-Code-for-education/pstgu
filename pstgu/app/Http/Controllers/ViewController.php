<?php

namespace App\Http\Controllers;

use App\Models\University;
use App\Models\View;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index($uni, $name)
    {
        $typesFormatImages = [
            "image",
            "3d"
        ];

        $findUni = University::where('url', $uni)->firstOrFail();

        $findImage = View::where('university', $findUni->id)->where('image', $name)->where('active', 1)->firstOrFail();

        $type = $findImage->typeImage;

        if (file_exists(public_path() . "/img/view/" . $findImage->imageName) === false) abort(404);
        if (in_array($type, $typesFormatImages) === false) abort(403);

        return view("view.$type", [
            'image' => $findImage->imageName
        ]);

        abort(403);
    }
}
