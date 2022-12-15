<x-app-layout>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/salads/{{ $salad->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>タイトル</h2>
                    <input type='text' name='salad[title]' value="{{ $salad->title }}">
                </div>
                <div class='content__recipe'>
                    <h2>レシピ</h2>
                    <input type='text' name='salad[recipe]' value="{{ $salad->recipe }}">
                </div>
                <div class='content__point'>
                    <h2>ポイント</h2>
                    <input type='text' name='salad[point]' value="{{ $salad->point }}">
                </div>
                <input type="submit" value="更新">
            </form>
        </div>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</x-app-layout>