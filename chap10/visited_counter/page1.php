<?php
require_once("../../lib/util.php");

if (isset($_COOKIE["visitedCount"])) {
    $visitedCount = $_COOKIE["visitedCount"];
} else {
    $visitedCount = 0;
}

$result = setcookie("visitedCount", ++$visitedCount, time()+60*5);

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page 1</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
    <?php
        if ($result) {
            echo "このページの訪問は", es($visitedCount), "回目です。", "<hr>";
            echo '<a href="page2.php">ページを移動する</a>', "<br>";
            echo '(<a href="reset_counter.php">リセットする</a>)';
        } else {
            echo '<span class = "error">クッキーが利用できませんでした。</span>';
        }
    ?>
</body>
</html>