@extends('layouts.user')

@section('page.title', __('Университеты'))

@section('user')

<form class="form-floating mb-3" method="get" action="">
    <input type="search" name="s" value="{{ $search }}" class="form-control" id="floatingInputValue" placeholder="МГТУ им. Н.Э. Баумана">
    <label for="floatingInputValue">
        {{ __('Найти ВУЗ') }}
    </label>
</form>

<ul class="list-group list-group-flush">
    @foreach($universities as $uni)
    <a href="{{ route('user.uni', $uni->url) }}" class="list-group-item py-3">
        {{ $uni->nameShort }}
    </a>
    @endforeach
</ul>

@endsection
