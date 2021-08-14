<?php
require_once("../../lib/util.php");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クッキーを確認する</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        if (isset($_COOKIE["gamedata"])) {
            $dataQueryString = $_COOKIE["gamedata"];
            parse_str($dataQueryString, $gamedata);
            $gamedata = es($gamedata);

            foreach ($gamedata as $key => $value) {
                echo "{$key} : {$value}", "<br>";
            }
            echo "<hr>";
            echo '<a href="check_cookie.php">クッキーを確認する</a>', "<br>";
        } else {
            echo 'クッキーはありません。', "<br>";
        }
        ?>
        <a href="set_cookie.php">戻る</a>
    </div>
</body>

</html>