<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('search') }}" method="GET">
        <input type="text" name="query" placeholder="検索キーワードを入力" required>
        <button type="submit">検索</button>
    </form>
</body>
</html>
