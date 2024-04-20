<header class="header navbar-expand-lg bg-body-tertiary py-2 mb-2">
    <div class="container">
        <div class="d-flex align-items-center justify-content-lg-start">
            <a href="{{ route('main') }}" aria-label="{{ __('Главная страница') }}" class="link-body-emphasis text-decoration-none fs-4 fw-bold">
                {{ __('ABITU') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="4" x2="20" y1="12" y2="12"/><line x1="4" x2="20" y1="6" y2="6"/><line x1="4" x2="20" y1="18" y2="18"/></svg>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="nav col-12 ms-lg-3 col-lg-auto me-lg-auto mb-md-0 header-content-links">
                    <li><a href="{{ route('main.about') }}" class="nav-link">{{ __('Информация') }}</a></li>
                    <li><a href="{{ route('main.faq') }}" class="nav-link">{{ __('FAQ') }}</a></li>
                </ul>
                <ul class="nav col-12 col-lg-auto ms-lg-auto mb-md-0 header-content-links">
                    <li>
                        <a href="{{ ('user') }}" class="nav-link text-decoration-none">
                            {{ __('Профиль') }}
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
