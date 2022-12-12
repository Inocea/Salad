<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Salad</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>サラダ好きのサラダ好きによるサラダ好きのためのアプリです！</h1>
        <a href='/posts/index'>発見する</a>
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
        <div class='paginate'>
            {{ $salads->links() }}
        </div>
    </body>
</html>