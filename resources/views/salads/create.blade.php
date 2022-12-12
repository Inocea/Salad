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
        <header>
            <h1><a href="/">レバカレ</a></h1><br>
            <h3>Levcale イベント一括管理サイト</h3>
            <nav id="global_navi">
                <ul>
                    <li class="current"><a href="/">HOME</a></li>
                    <li><a href="/mentor_calendar">メンター用</a></li>
                    <li><a href="/student_calendar">生徒用</a></li>
                    <li><a href="/login">ログイン</a></li>
                    <li><a href="/register">新規登録</a></li>
                </ul>
            </nav>
        </header>
        <h1>自作したサラダ名</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>サラダのタイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル"/>
            </div>
            <div class="body">
                <h2>レシピ</h2>
                <textarea name="post[recipe]" placeholder="材料・手順など"></textarea>
            </div>
            <div class="point">
                <h2>ポイント</h2>
                <textarea name="post[point]" placeholder="このサラダのおすすめポイント"></textarea>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
    </x-app-layout>
</html>