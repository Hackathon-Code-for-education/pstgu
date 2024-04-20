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
    <div class="d-flex flex-wrap">
        @foreach($photos as $photo)
            @if($photo->typeImage == "image")
            <div class="d-flex flex-column justify-content-center col-4">
                <a data-fancybox="university" data-src="{{ asset('img/view/' . $photo->imageName) }}" class="mb-1">
                    <img src="{{ asset('img/view/' . $photo->imageName) }}" class="img-fluid">
                </a>
                <a href="{{ route('view', [$uni->url, $photo->image]) }}">
                    Открыть
                </a>
            </div>
            @endif
        @endforeach
    </div>
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
        <div style="position:relative;overflow:hidden;">
            <iframe width="100%" height="500" src="{{ route('view', [$uni->url, $photo->image]) }}"></iframe>
        </div>
        @elseif($photo->typeImage == "yandex")
        <div style="position:relative;overflow:hidden;">
            <iframe src="https://yandex.ru/map-widget/v1/org/pravoslavny_svyato_tikhonovskiy_gumanitarny_universitet/1847360802/panorama/?ll=37.612962%2C55.772068&panorama%5Bdirection%5D=243.121722%2C73.389882&panorama%5Bfull%5D=true&panorama%5Bpoint%5D=37.612369%2C55.772133&panorama%5Bspan%5D=113.507663%2C60.000000&z=13" width="100%" height="500" frameborder="1" allowfullscreen="true" style="position:relative;">
            </iframe>
        </div>
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
