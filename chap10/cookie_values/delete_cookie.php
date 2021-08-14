<?php
$result = setcookie("message", "", time() - 3600);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クッキー削除ページ</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        if ($result) {
            echo "クッキーを削除しました。", "<hr>";
            echo '<a href = "check_cookie.php">クッキーを確認するページへ</a>';
        } else {
            echo '<span class="error">クッキーの削除でエラーがありました。</span>', "<br>";
        }
        ?>
    </div>
</body>

</html>