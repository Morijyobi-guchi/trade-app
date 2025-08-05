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
        <div id="imageContainer">
            <div class="image-item">
                <input type="file" id="imageUpload1" accept="image/*" style="display: none;">
                <img src="{{ Storage::url('images/camera.png') }}" alt="カメラ" onclick="document.getElementById('imageUpload1').click();" style="cursor: pointer;" class="camera-icon">
            </div>
            <div class="image-item">
                <input type="file" id="imageUpload2" accept="image/*" style="display: none;">
                <img src="{{ Storage::url('images/camera.png') }}" alt="カメラ" onclick="document.getElementById('imageUpload2').click();" style="cursor: pointer;" class="camera-icon">
            </div>
            <div class="image-item">
                <input type="file" id="imageUpload3" accept="image/*" style="display: none;">
                <img src="{{ Storage::url('images/camera.png') }}" alt="カメラ" onclick="document.getElementById('imageUpload3').click();" style="cursor: pointer;" class="camera-icon">
            </div>
            <div class="image-item">
                <input type="file" id="imageUpload4" accept="image/*" style="display: none;">
                <img src="{{ Storage::url('images/camera.png') }}" alt="カメラ" onclick="document.getElementById('imageUpload4').click();" style="cursor: pointer;" class="camera-icon">
            </div>
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
           @if(isset($wantGoods) && count($wantGoods) > 0)
                @foreach($wantGoods as $wantGood)
                    <div>
                        <p>{{ $wantGood }}</p>
                        <div><img src="{{ Storage::url('images/minus.png') }}" alt="マイナス"></div>
                    </div>
                @endforeach
            @else
                <div>
                    <p>ほしいものがありません</p>
                </div>
            @endif
        </div>
        <input type="submit" value="確認画面へ">
    </form>
    <script>
        function handleImageChange(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    // カメラアイコンを選択した画像に置き換える
                    const inputElement = event.target;
                    const cameraImg = inputElement.nextElementSibling;
                    cameraImg.src = e.target.result;
                    cameraImg.style.width = '100px';
                    cameraImg.style.height = '100px';
                    cameraImg.style.objectFit = 'cover';
                    cameraImg.onclick = null; // クリックイベントを無効化
                    
                    // 新しいカメラアイコンを追加
                    addImageUpload();
                };
                reader.readAsDataURL(file);
            }
        }
        document.getElementById('imageUpload1').addEventListener('change', handleImageChange);
        document.getElementById('imageUpload2').addEventListener('change', handleImageChange);
        document.getElementById('imageUpload3').addEventListener('change', handleImageChange);
        document.getElementById('imageUpload4').addEventListener('change', handleImageChange);
    </script>
</body>
</html>
