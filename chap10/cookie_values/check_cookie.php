<?php
require_once("../../lib/util.php");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クッキー確認ページ</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
    <div>
        <?php
        echo "クッキーを確認しました。","<br>";
        if (isset($_COOKIE["message"])) {
            $message = $_COOKIE["message"];
            echo "クッキーの値：", es($message), "<hr>";
            echo '<a href="delete_cookie.php">クッキーを削除する</a>';
        } else {
            echo "クッキーはありません。","<hr>";
            echo '<a href="set_cookie.php">クッキーを設定するページへ</a>';
        }   
        ?>
    </div>
</body>
</html>