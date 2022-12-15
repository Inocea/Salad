<x-app-layout>
    <head>
        <link rel="stylesheet" href="./css/top.css">
    </head>
    <body>
        <div class = 'title'>
            <h1>サラダ好きの</h1>
            <h1>サラダ好きによる</h1>
            <h1>サラダ好きのためのアプリです！</h1>
        </div>
        <!--<img src="image/musimegane.png" alt="発見"title="家族" width="300" height="200">-->
        <img src="{{asset('image/musimegane.png')}}">
        <div class = 'top'>
            <div class = 'salad hakken'>
                <h2>サラダを発見する</h2>
            </div>
            <div class = 'salad toukou'>
                <h2>サラダを投稿する</h2>
            </div>
        </div>
        <div class ='top2'>
            <a href='/salads/index'>発見する</a>
            <a href='/salads/create'>投稿する</a>
        </div>
    </body>
</x-app-layout>