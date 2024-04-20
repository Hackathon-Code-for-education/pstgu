@extends('layouts.sign')

@section('sign')
<p>
    {{ __('Ожидаем подтверждение вашего аккаунта от модератора платформы.') }}
</p>
<p>
    {{ __('Связаться с модератором: ') }}
    <a href="mailto:moderator@abitu.com">
        moderator@abitu.com
    </a>
</p>
@endsection
