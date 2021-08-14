<?php
$result1 = setcookie("visitedLog[counter]", "", time() - 3600);
$result2 = setcookie("visitedLog[time]", "", time() - 3600);
$result = ($result1 && $result2);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>リセットページ</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        if ($result) {
            echo "訪問のクッキーを破棄しました。", "<hr>";
            echo '<a href="page1.php"> Page1.phpに戻る</a>', "<br>";
        } else {
            echo '<span class = "error">クッキーの破棄でエラーがありました。</span>';
        }
        ?>
    </div>
</body>

</html>