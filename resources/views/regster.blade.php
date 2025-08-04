<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('./css/regster.css') }}">
    <title>Document</title>
</head>
<body>
    <div class="title">
        <img src="{{ Storage::url('images/left_arrow.png') }}" alt="左矢印">
        <p>出品する</p>
    </div>
    <form action="">
        <div>
            <div><img src="{{ Storage::url('images/camera.png') }}" alt="カメラ"></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div>
            <p>物品名</p>
            <input type="text">
        </div>
        <div>
            <p>物品カテゴリ</p>
            <select name="" id="">
                <option value="">例１</option>
                <option value="">例２</option>
                <option value="">例３</option>
            </select>
        </div>
        <div>
            <p>物品の状態</p>
            <select name="" id="">
                <option value="">例１</option>
                <option value="">例２</option>
                <option value="">例３</option>
            </select>
        </div>
        <div>
            <p>物品のハッシュタグ</p>
            <div>
                <input type="text">
                <input type="text">
                <input type="text">
            </div>
            <div><img src="{{ Storage::url('images/plus.png') }}" alt="プラス"></div>
        </div>
        <div>
            <p>説明</p>
            <textarea name="" id=""></textarea>
        </div>
        <div>
            <p>期限</p>
            <input type="date" name="" id="">
        </div>
        <div>
            <p>取引形態</p>
            <input type="radio" name="" id="">交換
            <input type="radio" name="" id="">譲渡
        </div>

        <p>交換したいもの</p>
        <div>
            <p>ほしいものリスト</p>
            <div>
                <p>ピカチュウ　ぬいぐるみ</p>
                <div><img src="{{ Storage::url('images/minus.png') }}" alt="マイナス"></div>
            </div>
            <div>
                <p>Elecom　静音マウス</p>
                <div><img src="{{ Storage::url('images/minus.png') }}" alt="マイナス"></div>
            </div>
            <div>
                <img src="{{ Storage::url('images/plus.png') }}" alt="プラス">
                <p>ほしいものを追加する</p>
            </div>
        </div>
        <input type="submit" value="確認画面へ">
    </form>
</body>
</html>
