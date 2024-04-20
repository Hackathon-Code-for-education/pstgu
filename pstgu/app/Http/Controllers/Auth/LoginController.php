<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('sign.in');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => ['required', 'email', 'max:254', 'min: 3'],
            'password' => ['required', 'string', 'min:3', 'max:254'],
        ]);

        $findUser = User::where('email', $validated['email'])->first();

        if ($findUser === null) {
            return redirect()->back()->withInput($validated)->withErrors([
                'user' => __('Пользователь не найден.')
            ]);
        }

        $passwordConfirm = app('hash')->check($validated['password'], $findUser->password);
        if ($passwordConfirm === false) {
            return redirect()->back()->withInput($validated)->withErrors([
                'password' => __('Некорректный пароль.')
            ]);
        }

        session(['email' => $validated['email']]);

        return redirect()->route('user');
    }
}
