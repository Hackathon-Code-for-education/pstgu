<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserRouteController extends Controller
{
    public function index()
    {
        $types = [
            "abiturent" => "абитур.",
            "student" => "студент",
            "university" => "предств.",
            "moderetor" => "модер.",
        ];

        $profile = User::where('email', session('email'))->first();

        $profileType = $types[$profile->type] ?? "<?>";

        return view('user.index', [
            'profile' => $profile,
            'profileType' => $profileType,
        ]);
    }
}
