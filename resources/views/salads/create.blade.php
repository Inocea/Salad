<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <x-app-layout>
        <x-slot name="header">
            　（ヘッダー名）
        </x-slot>
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>自作したサラダ名</h1>
        <form action="/salads" method="POST">
            @csrf
            <div class="title">
                <h2>サラダのタイトル</h2>
                <input type="text" name="salad[title]" placeholder="タイトル" value="{{ old('salad.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('salad.title') }}</p>
            </div>
            <div class="recipe">
                <h2>レシピ</h2>
                <textarea name="salad[recipe]" placeholder="材料・手順など">{{ old('salad.recipe') }}</textarea>
                <p class="recipe__error" style="color:red">{{ $errors->first('salad.recipe') }}</p>
            </div>
            <div class="point">
                <h2>ポイント</h2>
                <textarea name="salad[point]" placeholder="このサラダのおすすめポイント">{{ old('salad.point') }}</textarea>
                <p class="point__error" style="color:red">{{ $errors->first('salad.point') }}</p>
            </div>
            <!--<input type="hidden" name="salad[user_id]" value=1 />-->
            <input type="hidden" name="salad[user_id]" value="{{ Auth::user()->id }}"/>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
    </x-app-layout>
</html>