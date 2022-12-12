<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
        <x-slot name="header">
            　（ヘッダー名）
        </x-slot>
    <head>
        <meta charset="utf-8">
        <title>Salad</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>みんなのサラダを発見する</h1>
        <div class='salads'>
            @foreach ($salads as $salad)
                <div class='salad'>
                    <h2 class='title'>
                        <a href="/salads/{{ $salad->id }}">{{ $salad->title }}</a>
                    </h2>
                    <p class='point'>{{$salad->point}}</p>
                </div>
            @endforeach
        </div>
        <div class="footer">
            <a href="/">トップに戻る</a>
        </div>
        <div class='paginate'>
            {{ $salads->links() }}
        </div>
    </body>
    </x-app-layout>
</html>