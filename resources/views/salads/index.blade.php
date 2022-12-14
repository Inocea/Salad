<x-app-layout>
    <head>
        <link rel="stylesheet" href="./css/index.css">
    </head>
    <body>
        <h1>みんなのサラダを発見する</h1>
        <a href="/salads/mypage">マイページ</a>
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