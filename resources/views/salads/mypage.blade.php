<x-app-layout>
    <body>
        <h1>マイページ</h1>
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
    </body>
</x-app-layout>