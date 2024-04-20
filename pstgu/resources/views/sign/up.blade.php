@extends('layouts.sign')

@section('sign')
<h1 class="h3 mb-3 fw-normal">
    {{ __('Регистрация') }}
</h1>

<x-error />

<div class="form-floating">
    <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" required>
    <label for="floatingInput">
        {{ __('Почта') }}
    </label>
</div>

<div class="form-floating">
    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" value="{{ old('password') }}" required>
    <label for="floatingPassword">
        {{ __('Пароль') }}
    </label>
</div>

<div class="mb-3">
    <select class="form-select" name="type" aria-label="Выберите тип аккаунта" required>
        <option value="abiturient" selected>
            {{ __('Абитуриент') }}
        </option>
        <option value="student">
            {{ __('Студент') }}
        </option>
        <option value="university">
            {{ __('Представитель ВУЗа') }}
        </option>
        <option value="moderator">
            {{ __('Модератор') }}
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
