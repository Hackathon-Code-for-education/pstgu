@extends('layouts.base')

@once
    @push('css')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/sign.css') }}">
    @endpush
@endonce

@section('body')
<body class="d-flex align-items-center py-4 bg-body-tertiary">
<main class="form-signin w-100 m-auto">
    <form method="post" action="">
        <a href="{{ route('main') }}">
            <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        </a>
        @yield('sign')
        @csrf
        <p class="mt-5 mb-3 text-body-secondary">
            © {{ __('ABITU') }}
        </p>
    </form>
</main>
</body>
@endsection
