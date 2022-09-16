<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>惑星情報編集</h1>
    <form action="/planets/{{$planet->id}}" method="POST">
    @csrf
    @method('patch')
    <label for="name">名前</label>
    <input type="text" name="name"><br>
    <label for="en_name">名前(英語)</label>
    <input type="text" name="en_name"><br>
    <label for="radius">半径</label>
    <input type="text" name="radius"><br>
    <label for="weight">重さ</label>
    <input type="text" name="weight"><br>
    <input type="submit" value= "更新">
    </form>
    <a href="/planets">戻る</a>
</body>
</html>
