<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品詳細 - {{ $data['goods_name'] ?? 'データなし' }}</title>
    <link rel="stylesheet" href="{{ asset('css/detail_goods.css') }}">
</head>
<body>
    <div class="container">
        <h1>出品物詳細</h1>
        
        @if(isset($data))
            <div class="section">
                <h2>基本情報</h2>
                <p><strong>商品名:</strong> {{ $data['goods_name'] ?? 'データなし' }}</p>
                <p><strong>カテゴリー:</strong> {{ $data['category'] ?? 'データなし' }}</p>
                <p><strong>状況:</strong> {{ $data['situation'] ?? 'データなし' }}</p>
                <p><strong>サイズ:</strong> {{ $data['size'] ?? 'データなし' }}</p>
                <p><strong>数量:</strong> {{ $data['quantity'] ?? 'データなし' }}</p>
                <p><strong>取引タイプ:</strong> {{ $data['transaction_type'] ?? 'データなし' }}</p>
            </div>

            <div class="section">
                <h2>説明</h2>
                <p>{{ $data['description'] ?? 'データなし' }}</p>
            </div>

            @if(isset($data['images']) && count($data['images']) > 0)
                <div class="section">
                    <h2>画像一覧</h2>
                    <ul class="image-list">
                        @foreach($data['images'] as $image)
                            <li><img src="{{ asset('images/goods/' . basename($image)) }}" alt="商品画像" style="max-width: 300px; height: auto; border-radius: 5px;"></li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(isset($data['hashtags']) && count($data['hashtags']) > 0)
                <div class="section">
                    <h2>ハッシュタグ</h2>
                    @foreach($data['hashtags'] as $hashtag)
                        <span class="hashtag">#{{ $hashtag }}</span>
                    @endforeach
                </div>
            @endif

            @if(isset($data['want_goods']) && count($data['want_goods']) > 0)
                <div class="section">
                    <h2>欲しい物一覧</h2>
                    @foreach($data['want_goods'] as $wantGoods)
                        <div class="want-goods-item">
                            <h3>{{ $wantGoods['name'] ?? 'データなし' }}</h3>
                            <p><strong>説明:</strong> {{ $wantGoods['description'] ?? 'データなし' }}</p>
                            
                            @if(isset($wantGoods['images']) && count($wantGoods['images']) > 0)
                                <p><strong>画像:</strong></p>
                                <ul class="image-list">
                                    @foreach($wantGoods['images'] as $image)
                                        <li><img src="{{ asset('images/want_goods/' . basename($image)) }}" alt="欲しい物画像" style="max-width: 200px; height: auto; border-radius: 5px;"></li>
                                    @endforeach
                                </ul>
                            @endif
                            
                            @if(isset($wantGoods['hashtags']) && count($wantGoods['hashtags']) > 0)
                                <p><strong>ハッシュタグ:</strong></p>
                                @foreach($wantGoods['hashtags'] as $hashtag)
                                    <span class="hashtag">#{{ $hashtag }}</span>
                                @endforeach
                            @endif
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
</body>
</html>
