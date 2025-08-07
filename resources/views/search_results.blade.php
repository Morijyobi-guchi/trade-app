<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>検索結果 - トレードアプリ</title>
    {{-- Google Fonts と Font Awesome (アイコン表示用) を読み込み --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/search_results.css') }}">
</head>
<body>
    <div class="container">
        <!-- ヘッダー -->
        <header class="header">
            <a class="return" href="{{ asset('search') }}">←</a>
            <h1>検索結果</h1>
        </header>

        <!-- 検索条件の表示 -->
        <div class="search-info">
            @if($query)
                <p class="search-query">
                    <i class="fa-solid fa-hashtag"></i>
                    「{{ $query }}」の検索結果
                </p>
            @endif
            
            <div class="search-conditions">
                @if($condition)
                    <span class="condition-tag">
                        @if($condition === 'new')
                            <i class="fa-solid fa-star"></i> 欲しい物品
                        @elseif($condition === 'used')
                            <i class="fa-solid fa-exchange-alt"></i> 交換可能
                        @endif
                    </span>
                @endif
                
                @if(!empty($tradeTypes))
                    @foreach($tradeTypes as $type)
                        <span class="condition-tag">
                            @if($type === 'trade')
                                <i class="fa-solid fa-exchange-alt"></i> 交換
                            @elseif($type === 'transfer')
                                <i class="fa-solid fa-gift"></i> 譲渡
                            @endif
                        </span>
                    @endforeach
                @endif
            </div>
            
            <p class="result-count">{{ count($goods) }}件の物品が見つかりました</p>
        </div>

        <!-- 検索結果のグリッド表示 -->
        <div class="goods-grid">
            @forelse ($goods as $good)
                <a href="/goods-detail?goods_id={{ $good->id }}" class="goods-item">
                    <div class="item-image-container">
                        @if ($good->imageUrl)
                            <img src="{{ $good->imageUrl }}" alt="{{ $good->goods_name }}" class="item-image">
                        @else
                            <img src="https://placehold.jp/150x150.png?text=No+Image" alt="画像なし" class="item-image">
                        @endif
                        
                        <!-- 取引形態の表示 -->
                        <div class="transaction-badge">
                            {{ $good->transaction_type == 0 ? '交換' : '譲渡' }}
                        </div>
                        
                        <i class="fa-regular fa-star favorite-icon"></i>
                    </div>
                    <p class="item-name">{{ $good->goods_name }}</p>
                </a>
            @empty
                <div class="no-results">
                    <i class="fa-solid fa-search"></i>
                    <h3>検索結果が見つかりませんでした</h3>
                    <p>検索条件を変更して再度お試しください。</p>
                    <a href="{{ asset('search') }}" class="retry-button">
                        <i class="fa-solid fa-arrow-left"></i>
                        検索条件を変更する
                    </a>
                </div>
            @endforelse
        </div>
    </div>

    <!-- フッターナビゲーション -->
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
</body>
</html>
