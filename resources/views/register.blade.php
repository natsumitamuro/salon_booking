<!DOCTYPE html>
<!-- 文字コードの設定 -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <!-- 表示領域 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- タイトル（タブに表示される） -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- 独自のCSSを反映する -->
    <link rel="stylesheet" href="{{ asset('css/member.css') }}">

</head>

<body>

    <div style="width: 500px; text-align:center; margin: 100px auto;">
        <h4>新規会員登録</h4>
        <hr>
        <form action="/memberRegister" method="post">
            @csrf
            <div class="form-group">
                <input class="form-control" type="text" name="name" placeholder="名前">
                <input class="form-control" type="text" name="tel" placeholder="電話番号">
                <input class="form-control" type="text" name="email" placeholder="メールアドレス">
                <input class="form-control" type="text" name="password" placeholder="パスワード">
                <button type="submit" class="btn btn btn-outline-danger">新規会員登録</button>
            </div>
        </form>
    </div>



</body>

</html>
