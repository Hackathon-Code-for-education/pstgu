@extends('layouts.base')

{{-- @push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('css/user/index.css') }}" />
@endpush --}}

@section('body')
<body>
    @include('includes.header')
    <div class="container pt-3">
        <div class="row g-2 g-lg-3">
            <div class="col-3">
                <div class="p-3">
                    @include('includes.bar')
                </div>
            </div>
            <div class="col-9">
                <div class="p-3">
                    @yield('user')
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
