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
    <div class="d-flex justify-content-start mx-5">
        <h1 class="m-2 pt-4">ヘアサロン予約</h1>
    </div>

    <div class="mx-5 my-2">
        <ul class="nav justify-content-end p-1 list_triangle">
            <li class="nav-item">
                <a href="" class="mr-4">マイページ</a>
            </li>
            <li class="nav-item">
                <a href="/edit" class="mr-2">会員情報編集</a>
            </li>
        </ul>
    </div>

    <div class="mx-5">
        <ul class="nav nav-tabs justify-content-end">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">ヘアサロン</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ネイル</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">まつげ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">その他</a>
            </li>
        </ul>
        <hr>
    </div>


    <div class="container">
        <div class="mx-5">
            <h4 class="section_title">ランキング</h4>
            <div style="width: 400px;">
                <table class="table bg-light ranking">
                    @foreach ($salons->take(3) as $salon)
                        @if ($loop->first)
                            <tr>
                                <td style="font-size:6">
                                    <font size="6">1
                                </td>
                                <td class="font-weight-bold h3">{{ $salon->salonname }}<br>
                                    <img class="ranking_img" src="{{ asset('img/' . $salon->image_path) }}"
                                        alt="{{ $salon->salonname }}の画像" width="200" height="150">
                                </td>
                            </tr>
                        @elseif($loop->index === 1)
                            <tr>
                                <td>
                                    <font size="5">2
                                </td>
                                <td class="font-weight-bold h4">{{ $salon->salonname }}<br>
                                    <img class="ranking_img" src="{{ asset('img/' . $salon->image_path) }}"
                                        alt="{{ $salon->salonname }}の画像" width="150" height="100">
                                </td>
                            @else
                            <tr>
                                <td>
                                    <font size="4">3
                                </td>
                                <td class="font-weight-bold h5">{{ $salon->salonname }}<br>
                                    <img class="ranking_img" src="{{ asset('img/' . $salon->image_path) }}"
                                        alt="{{ $salon->salonname }}の画像" width="150" height="100">
                                </td>
                        @endif
                    @endforeach

                </table>
            </div>
        </div>
        <div class="mx-5 ">
            <h4 class="section_title">サロン</h4>
            <div class="d-inline-flex flex-wrap" style="width: 600px;">
                @foreach ($salons->take(9) as $salon)
                    @if ($loop->index === 7)
                        <div class="text-center border border-2 rounded m-3" style="width: 250px;">
                            <img class="p-2" src="{{ asset('img/' . $salon->image_path) }}"
                            alt="{{ $salon->salonname }}の画像" width="200" height="150"><br>
                            <b class="h5">{{ $salon->salonname }}</b><br>
                            <div class="small m-1">{{ $salon->adress }}</div><br>
                        </div>
                    @elseif($loop->index === 6)
                        <div class="text-center border border-2 rounded m-3" style="width: 250px;">
                            <img class="p-2" src="{{ asset('img/' . $salon->image_path) }}"
                            alt="{{ $salon->salonname }}の画像" width="200" height="150"><br>
                            <b class="h5">{{ $salon->salonname }}</b><br>
                            <div class="small m-1">{{ $salon->adress }}</div><br>
                        </div>
                    @elseif($loop->index === 5)
                        <div class="text-center border border-2 rounded m-3" style="width: 250px;">
                            <img class="p-2" src="{{ asset('img/' . $salon->image_path) }}"
                            alt="{{ $salon->salonname }}の画像" width="200" height="150"><br>
                            <b class="h5">{{ $salon->salonname }}</b><br>
                            <div class="small m-1">{{ $salon->adress }}</div><br>
                        </div>
                    @elseif($loop->index === 4)
                        <div class="text-center border border-2 rounded m-3" style="width: 250px;">
                            <img class="p-2" src="{{ asset('img/' . $salon->image_path) }}"
                            alt="{{ $salon->salonname }}の画像" width="200" height="150"><br>
                            <b class="h5">{{ $salon->salonname }}</b><br>
                            <div class="small m-1">{{ $salon->adress }}</div><br>
                        </div>
                    @elseif($loop->index === 3)
                        <div class="text-center border border-2 rounded m-3" style="width: 250px;">
                            <img class="p-2" src="{{ asset('img/' . $salon->image_path) }}"
                            alt="{{ $salon->salonname }}の画像" width="200" height="150"><br>
                            <b class="h5">{{ $salon->salonname }}</b><br>
                            <div class="small m-1">{{ $salon->adress }}</div><br>
                        </div>
                    @elseif($loop->index === 2)
                        <div class="text-center border border-2 rounded m-3" style="width: 250px;">
                            <img class="p-2" src="{{ asset('img/' . $salon->image_path) }}"
                                alt="{{ $salon->salonname }}の画像" width="200" height="150"><br>
                                <b class="h5">{{ $salon->salonname }}</b><br>
                                <div class="small m-1">{{ $salon->adress }}</div><br>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    </div>
</body>

</html>
