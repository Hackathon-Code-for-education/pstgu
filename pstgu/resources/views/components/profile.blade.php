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
@if(count($feedbacks) == 0)
<p>
    {{ __('Пока нет отзывов.') }}
</p>
@else
<ul class="list-group list-group-flush">
    @foreach($feedbacks as $feed)
    <li class="list-group-item py-3">
        <p class="mb-2">
            {{ $feed->rating }}/5
        </p>
        <p class="mb-0 fw-bold">
            {{ $feed->title }}
        </p>
        <p>
            {{ $feed->desc }}
        </p>
    </li>
    @endforeach
</ul>
@endif
