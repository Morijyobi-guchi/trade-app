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
            @foreach ($goods as $good)
                <a href="/goods/{{ $good->id }}" class="goods-item">

                    @if ($good->image)
                        {{-- 画像がある場合は、その画像を表示 --}}
                        <img src="{{ asset('' . $good->image->img_pass) }}" alt="{{ $good->goods_name }}">
                    @else
                        {{-- 画像がない場合は、代替画像を表示 --}}
                        <img src="https://placehold.jp/150x150.png?text=No+Image" alt="画像なし">
                    @endif
                    <p class="item-name">{{ $good->goods_name }}</p>
                </a>
            @endforeach
        </div>
    </div>

    <!-- <nav class="footer-nav">
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
    </nav>  -->

</body>
</html>


