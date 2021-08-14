<?php
$result = setcookie("visitedCount", 0, time()+60*5);
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
                echo "カウンターをリセットしました。","<hr>";
                echo '<a href="page1.php"> Page1.phpに戻る</a>';
            } else {
                echo '<span class = "error">カウンターをリセットでエラーがありました。</span>';
            }
        ?>
    </div>
</body>
</html>