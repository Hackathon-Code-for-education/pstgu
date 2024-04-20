<footer class="footer py-3 mt-4">
    <div class="container d-flex align-items-center">
        <div class="me-auto">
            <span>© 2020-{{ date('Y') }}</span>
            <a href="{{ route('main') }}">
                {{ __('ABITU') }}
            </a>
        </div>
        <div class="d-flex">
            <div class="footer__privacy">
                <a href="{{ ('main.terms.privacy') }}">{{ __('Политика конфиденциальности') }}</a>
            </div>
            <div class="footer__language">
                <span>{{ __('RU') }}</span>
            </div>
        </div>
    </div>
</footer>
