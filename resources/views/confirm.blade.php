<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('./css/confirm.css') }}">
    <title>確認画面</title>
</head>
<body>
    <div class="container">
        <h1>出品内容確認</h1>
        
        @if(isset($formData))
            <!-- 画像表示 -->
             @if(!empty($formData['image_paths']))
                <div class="form-group">
                    <div class="label">画像:</div>
                    <div class="image-gallery">
                        @foreach($formData['image_paths'] as $path)
                            <div class="image-item">
                                <img src="{{ Storage::url($path) }}" alt="アップロード画像">
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- 物品名 -->
            <div class="form-group">
                <div class="label">物品名:</div>
                <div class="value">{{ $formData['goods_name'] ?? '未入力' }}</div>
            </div>

            <!-- カテゴリ -->
            <div class="form-group">
                <div class="label">物品カテゴリ:</div>
                <div class="value">{{ $formData['category_name'] ?? '未選択' }}</div>
            </div>

            <!-- 状態 -->
            <div class="form-group">
                <div class="label">物品の状態:</div>
                <div class="value">{{ $formData['situation_name'] ?? '未選択' }}</div>
            </div>

            <!-- ハッシュタグ -->
            @if(!empty($formData['hashtags']))
                <div class="form-group">
                    <div class="label">ハッシュタグ:</div>
                    <div class="hashtags">
                        @foreach($formData['hashtags'] as $hashtag)
                            <span class="hashtag">#{{ $hashtag }}</span>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- 説明 -->
            <div class="form-group">
                <div class="label">説明:</div>
                <div class="value">{{ $formData['explanation'] ?? '未入力' }}</div>
            </div>

            <!-- 期限 -->
            <div class="form-group">
                <div class="label">掲載期限:</div>
                <div class="value">{{ $formData['listing_deadline'] ?? '未入力' }}</div>
            </div>

            <!-- 取引形態 -->
            <div class="form-group">
                <div class="label">取引形態:</div>
                <div class="value">
                    @if($formData['transaction_type'] == '1')
                        交換
                    @elseif($formData['transaction_type'] == '2')
                        譲渡
                    @else
                        未選択
                    @endif
                </div>
            </div>

            <!-- ほしいもの -->
            @if(!empty($wantGoodsDetails))
                <div class="form-group">
                    <div class="label">選択したほしいもの:</div>
                    <div class="value">
                        @foreach($wantGoodsDetails as $wantGood)
                            <div>・{{ $wantGood['want_goods_name'] }}</div>
                        @endforeach
                    </div>
                </div>
            @endif

            <!-- ボタン -->
           <form action="{{ route('goods.create') }}" method="POST" id="confirmForm">
                @csrf
                <div class="buttons">
                    <a href="{{ route('register') }}" class="btn btn-secondary">戻る</a>
                    <button type="submit" class="btn btn-primary">出品する</button>
                </div>
            </form>

        @else
            <p>フォームデータが見つかりません。</p>
            <a href="{{ route('register') }}" class="btn btn-secondary">入力画面に戻る</a>
        @endif
    </div>
</body>
</html>
