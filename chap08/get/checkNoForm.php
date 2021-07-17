<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーム入力処理の基本（GET）</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <form method="GET" action="checkNo.php">
            <ul>
                <li><label>番号：<input type="number" name="no"></label></li>
                <li><input type="submit" value="調べる"></li>
            </ul>
        </form>
    </div>
</body>

</html>