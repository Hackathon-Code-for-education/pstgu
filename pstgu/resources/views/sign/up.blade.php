@extends('layouts.sign')

@section('sign')
<h1 class="h3 mb-3 fw-normal">
    {{ __('Регистрация') }}
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

<div class="mb-3">
    <select class="form-select" aria-label="Default select example">
        <option value="abitur" selected>
            {{ __('Абитуриент') }}
        </option>
        <option value="university">
            {{ __('Представитель ВУЗа') }}
        </option>
    </select>
</div>

<button class="btn btn-success w-100 py-2" type="submit">
    {{ __('Зарегистрироваться') }}
</button>
<p class="text-center mt-2">
    <a href="{{ route('signin') }}">
        {{ __('Войти') }}
    </a>
</p>
@endsection
