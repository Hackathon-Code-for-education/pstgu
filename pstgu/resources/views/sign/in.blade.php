@extends('layouts.sign')

@section('sign')
<h1 class="h3 mb-3 fw-normal">
    {{ __('Войти в аккаунт') }}
</h1>

<div class="form-floating">
    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
    <label for="floatingInput">
        {{ __('Почта') }}
    </label>
</div>

<div class="form-floating">
    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
    <label for="floatingPassword">
        {{ __('Пароль') }}
    </label>
</div>

<button class="btn btn-primary w-100 py-2" type="submit">
    {{ __('Войти') }}
</button>
<p class="text-center mt-2">
    <a href="{{ route('signup') }}">
        {{ __('Регистрация') }}
    </a>
</p>
@endsection
