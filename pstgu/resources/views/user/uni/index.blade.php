@extends('layouts.user')

@section('page.title', __('Профиль'))

@once
    @push('css')
        <link rel="stylesheet" href="{{ asset('css/fancybox.css') }}">
    @endpush
@endonce

@once
    @push('js')
        <script src="{{ asset('js/fancybox.js') }}"></script>
        <script>
            Fancybox.bind('[data-fancybox="university"]', { infinite: false });
            Fancybox.bind('[data-fancybox="university-3d"]', { infinite: false });
        </script>
    @endpush
@endonce

@section('user')

<p class="mb-2">
    <a href="{{ route('user.universities') }}">
        Все ВУЗы
    </a>
</p>

<div class="mb-4">
    <h1>
        {{ $uni->name }}
    </h1>
    <p class="text-muted fs-4">
        {{ $uni->nameShort }}
    </p>
</div>

<div class="mb-5">
    <p class="fs-5">
        {{ $uni->desc }}
    </p>
</div>

<div class="mb-3">
    <p class="text-muted text-uppercase" style="letter-spacing: .15rem">
        {{ __('Фотографии') }}
    </p>
    @if(count($photos) == 0)
    <p>
        {{ __('Пока нет фотографий.') }}
    </p>
    @else
    @foreach($photos as $photo)
        @if($photo->typeImage == "image")
        <a data-fancybox="university" data-src="{{ asset('img/view/' . $photo->imageName) }}">
            <img src="{{ asset('img/view/' . $photo->imageName) }}" class="img-fluid w-25">
        </a>
        @endif
    @endforeach
    @endif
</div>

<div class="mb-3">
    <p class="text-muted text-uppercase" style="letter-spacing: .15rem">
        {{ __('Панорамы') }}
    </p>
    @if(count($photos) == 0)
    <p>
        {{ __('Пока нет панорам.') }}
    </p>
    @else
    @foreach($photos as $photo)
        @if($photo->typeImage == "3d")
        <a data-fancybox="university-3d" data-src="{{ asset('img/view/' . $photo->imageName) }}">
            <img src="{{ asset('img/view/' . $photo->imageName) }}" class="img-fluid w-25">
        </a>
        @endif
    @endforeach
    @endif
</div>

<div class="mb-3">
    <p class="text-muted text-uppercase" style="letter-spacing: .15rem">
        {{ __('Отзывы') }}
    </p>
    @if(count($feedbacks) == 0)
    <p>
        {{ __('Пока нет отзывов.') }}
    </p>
    @else
    <ul class="list-group list-group-flush">
        @foreach($feedbacks as $feed)
        <li class="list-group-item">
            <p class="mb-2">
                {{ $feed->rating }}/5
            </p>
            <p class="fw-bold mb-1">
                {{ $feed->title }}
            </p>
            <p class="fs-bold mb-1">
                {{ $feed->desc }}
            </p>
        </li>
        @endforeach
    </ul>
    @endif
</div>

@endsection
