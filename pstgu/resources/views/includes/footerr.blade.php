<footer class="footer py-3 mt-4">
    <div class="container d-flex align-items-center">
        <div class="me-auto">
            <span>© 2020-{{ date('Y') }}</span>
            <a href="{{ route('main') }}">
                {{ __('ABITU') }}
            </a>
        </div>
        <div class="d-flex">
            <div class="me-2">
                <a href="{{ route('main.terms') }}">{{ __('Политика конфиденциальности') }}</a>
            </div>
            <div class="">
                <span>{{ __('RU') }}</span>
            </div>
        </div>
    </div>
</footer>
