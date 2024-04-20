<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
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

        $feedbacks = Feedback::where('active', 1)->where('user', $profile->id)->get();

        return view('user.index', [
            'profile' => $profile,
            'profileType' => $profileType,
            'feedbacks' => $feedbacks,
        ]);
    }
}
