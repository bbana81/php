<?php
$message = 'hello';
$result = setcookie('message', $message);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クッキー保存ページ</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
    <?php
    if ($result) {
        echo "クッキーを保存しました。", "<hr>";
        echo '<a href="check_cookie.php">クッキーを確認するページへ</a>';
    } else {
        echo '<span class="error">クッキーの保存でエラーがありました。</span>',"<br>";
    }
    ?>
    </div>
</body>

</html>