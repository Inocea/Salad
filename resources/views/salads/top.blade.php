<x-app-layout>
    <body>
        <h1>サラダ好きのサラダ好きによるサラダ好きのためのアプリです！</h1>
        <a href='/salads/index'>発見する</a>
        <a href='/salads/create'>投稿する</a>
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
</x-app-layout>