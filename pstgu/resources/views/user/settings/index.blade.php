@extends('layouts.user')

@section('page.title', __('Профиль'))

@section('user')
<h1>
    {{ __('Настройки') }}
</h1>

<p>
    <a href="{{ route('exit') }}">
        {{ __('Выйти из аккаунта') }}
    </a>
</p>
@endsection
