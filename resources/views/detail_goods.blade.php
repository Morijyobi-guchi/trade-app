<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細 - {{ $data['goods_name'] ?? 'データなし' }}</title>
    <link rel="stylesheet" href="{{ asset('css/detail_goods.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <div class="container">
        <header>
            <a class="return" href="top">←</a>
            <h1>出品物詳細</h1>
        </header>
        @if(isset($data['images']) && count($data['images']) > 0)
        <div class="section">
            <div class="slideshow-container">
                @foreach($data['images'] as $index => $image)
                <div class="slide" style="{{ $index === 0 ? 'display: block;' : 'display: none;' }}">
                    <div class="transaction-overlay">{{ $data['transaction_type'] ?? 'データなし' }}</div>
                    <img src="{{ asset('images/goods/' . basename($image)) }}" alt="商品画像 {{ $index + 1 }}">
                </div>
                @endforeach
                @if(count($data['images']) > 1)
                <a class="prev">&#10094;</a>
                <a class="next">&#10095;</a>
                @endif
                <div style="text-align: center; margin-top: 10px;">
                    <div class="slide-number">1 / {{ count($data['images']) }}</div>
                </div>
            </div>
            <p class="goods_name">{{ $data['goods_name'] ?? 'データなし' }}</p>
        </div>
        @endif
        @if(isset($data))
            <div class="section">
                <h2>出品物の情報</h2>
                <p><strong>状態:</strong> {{ $data['situation'] ?? 'データなし' }}</p>
                <p><strong>カテゴリー:</strong> {{ $data['category'] ?? 'データなし' }}</p>
                <div style="margin: 10px 0;">
                    @if(isset($data['hashtags']) && count($data['hashtags']) > 0)
                        @foreach($data['hashtags'] as $hashtag)
                            <span class="hashtag">#{{ $hashtag }}</span>
                        @endforeach
                    @endif
                </div>
                <div class="size_num">
                    <p class="size"><strong>サイズ:</strong> {{ $data['size'] ?? 'データなし' }}</p>
                    <p class="num"><strong>数量:</strong> {{ $data['quantity'] ?? 'データなし' }}</p>
                    <p class="deadline"><strong>期限:</strong> {{ $data['listing_deadline'] ?? 'データなし' }}</p>
                </div>
                    <p><strong>説明:</strong> {{ $data['description'] ?? 'データなし' }}</p>
            </div>
            @if(isset($data['want_goods']) && count($data['want_goods']) > 0)
                <div class="section">
                    <h2>欲しい物の情報</h2>
                    @foreach($data['want_goods'] as $index => $wantGoods)
                        <div class="want-goods-item">
                            <div class="want-goods-header" onclick="toggleAccordion({{ $index }})">
                                <h3>{{ $wantGoods['name'] ?? 'データなし' }}</h3>
                                <span class="accordion-icon" id="icon-{{ $index }}">▼</span>
                            </div>
                            <div class="want-goods-content" id="content-{{ $index }}">
                                <p><strong>説明:</strong> {{ $wantGoods['description'] ?? 'データなし' }}</p>
                                
                                @if(isset($wantGoods['images']) && count($wantGoods['images']) > 0)
                                    <div class="slideshow-container">
                                        @foreach($wantGoods['images'] as $wantIndex => $image)
                                        <div class="slide" style="{{ $wantIndex === 0 ? 'display: block;' : 'display: none;' }}">
                                            <img src="{{ asset('images/want_goods/' . basename($image)) }}" alt="欲しい物画像 {{ $wantIndex + 1 }}" style="max-height: 250px;">
                                        </div>
                                        @endforeach
                                        @if(count($wantGoods['images']) > 1)
                                        <a class="prev">&#10094;</a>
                                        <a class="next">&#10095;</a>
                                        @endif
                                        <div style="text-align: center; margin-top: 10px;">
                                            <div class="slide-number">1 / {{ count($wantGoods['images']) }}</div>
                                        </div>
                                    </div>
                                @endif
                                
                                @if(isset($wantGoods['hashtags']) && count($wantGoods['hashtags']) > 0)
                                    @foreach($wantGoods['hashtags'] as $hashtag)
                                        <span class="hashtag">#{{ $hashtag }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        @else
            <div class="section">
                <h2>エラー</h2>
                <p>データが見つかりませんでした。goods_idパラメーターを確認してください。</p>
                <p>例: <code>/goods-detail?goods_id=1</code></p>
            </div>
        @endif
    </div>
    <nav class="footer-nav">
        <a href="#" class="footer-item">
            <i class="fa-solid fa-house"></i>
            <span>ホーム</span>
        </a>
        <a href="{{ asset('search') }}" class="footer-item active">
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
    <script src="{{ asset('js/detail_goods.js') }}"></script>
</body>
</html>
