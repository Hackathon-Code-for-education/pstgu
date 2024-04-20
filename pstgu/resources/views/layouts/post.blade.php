@extends('layouts.base')

@section('body')
<body class="d-flex flex-column justify-content-between min-vh-100">
    @include('includes.header')
    <main class="flex-grow-1 pb-1">
        <section class="container">
            @yield('main')
        </section>
    </main>
    @include('includes.footerr')
</body>
@endsection
