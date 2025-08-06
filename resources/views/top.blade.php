<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ホーム</title>
    {{-- Google Fonts と Font Awesome (アイコン表示用) を読み込み --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('./css/top.css') }}">

</head>
<body>

@php
    // --- 表示確認用のダミーデータ ---
    // この部分は、後でコントローラーから$goods変数を渡すようになったら削除してください。
    $goods = [
        (object)['id' => 1, 'goodsName' => 'ワイヤレスイヤホン 高音質モデル ブラック', 'imageUrl' => 'https://placehold.jp/3d4070/ffffff/150x150.png?text=Item1'],
        (object)['id' => 2, 'goodsName' => 'ノートPCスタンド アルミ製 シルバーでとても使いやすいです', 'imageUrl' => 'https://placehold.jp/703d6a/ffffff/150x150.png?text=Item2'],
        (object)['id' => 3, 'goodsName' => 'USB-C 急速充電器 65W対応', 'imageUrl' => null],
        (object)['id' => 4, 'goodsName' => '静音設計ワイヤレスマウス', 'imageUrl' => 'https://placehold.jp/6a703d/ffffff/150x150.png?text=Item4'],
        (object)['id' => 5, 'goodsName' => '4K対応Webカメラ', 'imageUrl' => 'https://placehold.jp/3d7063/ffffff/150x150.png?text=Item5'],
        (object)['id' => 6, 'goodsName' => 'メカニカルキーボード（青軸）', 'imageUrl' => 'https://placehold.jp/705a3d/ffffff/150x150.png?text=Item6'],
        (object)['id' => 7, 'goodsName' => 'モバイルバッテリー 10000mAh', 'imageUrl' => 'https://placehold.jp/523d70/ffffff/150x150.png?text=Item7'],
        (object)['id' => 8, 'goodsName' => '27インチWQHDモニター', 'imageUrl' => 'https://placehold.jp/3d704b/ffffff/150x150.png?text=Item8'],
        (object)['id' => 9, 'goodsName' => '拡張ドッキングステーション', 'imageUrl' => 'https://placehold.jp/703d3d/ffffff/150x150.png?text=Item9'],
    ];
@endphp

    <div class="container">
        <div class="search-bar">
            <input type="text" class="search-input" placeholder="検索">
        </div>

        <div class="controls">
            <div class="nav-tabs">
                <a href="#" class="active">交換</a>
                <a href="#">譲渡</a>
            </div>
            <select name="sort" class="sort-select">
                <option value="newest">新着順</option>
                <option value="popular">人気順</option>
            </select>
        </div>

        <div class="goods-grid">
            {{-- ダミーデータ（またはコントローラーから渡された$goods変数）をループ処理 --}}
            @forelse ($goods as $good)
                <a href="/goods/{{ $good->id }}" class="goods-item">
                    <div class="item-image-container">
                        {{-- 画像URLが存在すれば表示、なければプレースホルダーを表示 --}}
                        @if ($good->imageUrl)
                            <img src="{{ $good->imageUrl }}" alt="{{ $good->goodsName }}" class="item-image">
                        @else
                            <img src="https://placehold.jp/150x150.png?text=No+Image" alt="画像なし" class="item-image">
                        @endif
                        <i class="fa-regular fa-star favorite-icon"></i>
                    </div>
                    <p class="item-name">{{ $good->goods_name }}</p>
                </a>
            @empty
                <p>対象の商品はありません。</p>
            @endforelse
        </div>
    </div>

    <nav class="footer-nav">
        <a href="#" class="footer-item active">
            <i class="fa-solid fa-house"></i>
            <span>ホーム</span>
        </a>
        <a href="#" class="footer-item">
            <i class="fa-solid fa-magnifying-glass"></i>
            <span>探す</span>
        </a>
        <a href="#" class="footer-item">
            <i class="fa-solid fa-box-archive"></i>
            <span>マイクローゼット</span>
        </a>
        <a href="#" class="footer-item">
            <i class="fa-solid fa-camera"></i>
            <span>出品</span>
        </a>
        <a href="#" class="footer-item">
            <i class="fa-solid fa-user"></i>
            <span>マイページ</span>
        </a>
    </nav> 

</body>
</html>

@foreach ($goods as $good)
<p>{{$good-> goods_name}}</p>
@endforeach 