<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
        <x-slot name="header">
            　（ヘッダー名）
        </x-slot>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Salad</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class="title">
            {{ $salad->title }}
        </h1>
        <div class="content">
            <div class="content__salad">
                <p>{{ $salad->recipe }}</p>
                <p>{{ $salad->point }}</p>
            </div>
        </div>
        <div class="edit"><a href="/salads/{{ $salad->id }}/edit">編集</a></div> <!--編集機能-->
        <form action="/salads/{{ $salad->id }}" id="form_{{ $salad->id }}" method="post"> <!--削除機能-->
            @csrf
            @method('DELETE')
            <button type="button" onclick="deleteSalad({{ $salad->id }})">削除</button> 
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
        <script> //削除機能
            function deleteSalad(id) {
                'use strict'
        
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                    document.getElementById(`form_${id}`).submit();
                }
            }
        </script>
    </body>
    </x-app-layout>
</html>