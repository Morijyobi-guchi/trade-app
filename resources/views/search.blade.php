<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>物品検索 - トレードアプリ</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
</head>
<body>
    <div class="container">
        <header class="header">
            <a class="return" href="top">←</a>
            <h1>物品検索</h1>
            <p>欲しい物品や交換可能な物品を見つけよう</p>
        </header>
        
        <div class="form-container">
            <form action="{{ asset('/search/result') }}" method="POST" class="search-form">
                @csrf
                
                <!-- 検索ボックス -->
                <div class="search-box">
                    <input type="text" name="query" placeholder="ハッシュタグで検索（例：#本 #ゲーム）" required>
                </div>
                
                <!-- 物品条件 -->
                <div class="form-section">
                    <h3>物品条件</h3>
                    <div class="radio-group">
                        <label class="radio-item">
                            <input type="radio" name="condition" value="new">
                            <span>欲しい物品を検索</span>
                        </label>
                        <label class="radio-item">
                            <input type="radio" name="condition" value="used">
                            <span>交換できる物品を検索</span>
                        </label>
                    </div>
                </div>
                
                <!-- 取引形態 -->
                <div class="form-section">
                    <h3>取引形態（複数選択可）</h3>
                    <div class="checkbox-group">
                        <label class="checkbox-item">
                            <input type="checkbox" name="trade_type[]" value="trade">
                            <span>交換</span>
                        </label>
                        <label class="checkbox-item">
                            <input type="checkbox" name="trade_type[]" value="transfer">
                            <span>譲渡</span>
                        </label>
                    </div>
                </div>
                
                <!-- カテゴリー -->
                <div class="form-section">
                    <h3>カテゴリー（複数選択可）</h3>
                    <div class="category-grid">
                        @foreach ($category as $cat)
                            <label class="checkbox-item">
                                <input type="checkbox" name="category[]" value="{{ $cat->id }}">
                                <span>{{ $cat->category }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>
                
                <!-- 期限と状態 -->
                <div class="form-section">
                    <h3>詳細設定</h3>
                    <div class="select-group">
                        <div class="select-item">
                            <label for="deadline">期限</label>
                            <select name="deadline" id="deadline">
                                <option value="0">制限なし</option>
                                <option value="3">3日以内</option>
                                <option value="7">一週間以内</option>
                                <option value="30">一か月以内</option>
                                <option value="180">半年以内</option>
                                <option value="365">一年以内</option>
                            </select>
                        </div>
                        <div class="select-item">
                            <label for="status">状態</label>
                            <select name="status" id="status">
                                <option value="0">指定なし</option>
                                @foreach ($situation as $stat)
                                    <option value="{{ $stat->id }}">{{ $stat->goods_situation }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="submit-button">検索する</button>
            </form>
        </div>
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

    <script src="{{ asset('js/search.js') }}"></script>
</body>
</html>
