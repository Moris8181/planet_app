<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>惑星情報登録</h1>

    @if ($errors->any())
        <div class="error">
            <p>
                <b>{{ count($errors) }}件のエラーがあります。</b>
            </p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/planets" method="post">
    @csrf
        <div class="a">
            <label for="name">名前</label>
            <input type="text" name="name">
        </div>
        <div class="a">
            <label for="en_name">名前(英語)</label>
            <input type="text" name="en_name">
        </div>
        <div class="a">
            <label for="radius">半径</label>
            <input type="text" name="radius">
        </div>
        <div class="a">
            <label for="weight">重さ</label>
            <input type="text" name="weight">
        </div>
        <input type="submit" value="登録">
    </form>
    <div class="a">
        <a href="/planets">戻る</a>
    </div>
</body>

</html>
