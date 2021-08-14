<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモの入力</title>
    <link href="../..css/style.css" rel="write_memofile.php">
</head>

<body>
    <div>
        <form method="POST" action="write_memofile.php">
            <li><span>memo:</span>
                <textarea name="memo" cols="25" rows="4" maxlength="100" placehholder="メモを書く"></textarea>
            </li>
            <li>
                <input type="submit" value="送信する">
            </li>
        </form>
    </div>
</body>

</html>