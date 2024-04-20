<!DOCTYPE html>
<html lang="{{ App::currentLocale() }}">

<x-head />

@yield('body')

<script src="{{ asset('js/bootstrap.js') }}"></script>

@stack('js')

</html>
