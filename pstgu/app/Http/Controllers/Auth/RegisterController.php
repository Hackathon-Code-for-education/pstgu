<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function index()
    {
        return view('sign.up');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'string', 'max:254', 'min: 3', 'email'],
            'password' => ['required', 'string', 'min:3', 'max:254', Password::min(3)->letters()->numbers()],
            'type' => ['required', 'string'],
        ]);

        $checkTypeUser = in_array($validated['type'], ['abiturient', 'student', 'university', 'moderator']);

        if ($checkTypeUser === false) {
            return redirect()->back()->withInput($validated)->withErrors([
                'user' => __('Неверный тип пользователя.')
            ]);
        }

        $findUser = User::where('email', $validated['email'])->first();

        if ($findUser !== null) {
            return redirect()->back()->withInput($validated)->withErrors([
                'user' => __('Пользователь уже существует.')
            ]);
        }

        User::query()->create([
            'email' => $validated['email'],
            'password' => bcrypt($validated['password']),
            'type' => $validated['type']
        ]);

        session(['email' => $validated['email']]);

        return redirect()->route('user');
    }
}
