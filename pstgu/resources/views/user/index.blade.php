@extends('layouts.user')

@section('page.title', __('Профиль'))

@section('user')
<x-profile :user="$profile" :feedbacks="$feedbacks" :type="$profileType" name="Имя" />

<p>
    <a href="{{ route('exit') }}">
        {{ __('Выйти') }}
    </a>
</p>

@endsection
