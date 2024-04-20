<div class="d-flex flex-wrap align-items-center mb-4">
    <div class="p-1 border border-1 rounded-circle me-4">
        <img src="{{ asset('img/user.png') }}" width="150" class="rounded-circle" alt="">
    </div>
    <div class="d-flex flex-column">
        <h3>
            {{ $name }}
        </h3>
        <p class="text-muted mb-0">
            {{ $user->email }}
        </p>
    </div>
    <div class="ms-auto">
        <p class="fs-3 text-lowercase" style="letter-spacing: .15rem">
            {{ $type }}
        </p>
    </div>
</div>

<h2>
    {{ __('Отзывы') }}
</h2>
<ul>
    <li>
        демонстрация
    </li>
</ul>
