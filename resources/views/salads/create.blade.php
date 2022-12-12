<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
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
</html>