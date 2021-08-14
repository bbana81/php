<?php
require_once("../../lib/util.php");

$gamedata = ["name" => "マッキー", "age" => "19", "avatar" => "blue_snake", "level" => "a02wr215"];
$dataQueryString = array_queryString($gamedata);
$result = setcookie("gamedata", $dataQueryString, time() + 60 * 5);
?>

<?php
function array_queryString(array $variable)
{
    $data = [];
    foreach ($variable as $key => $value) {
        //$data[] = "{$key} = {$value}";
        $data[] = "$key = $value";
    }

    $queryString = implode("&", $data);
    //$queryString = implode("&", $variable);
    
    return $queryString;
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>クッキーを保存する</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
    <?php
        if ($result) {
            echo "ゲームデータを保存しました。", "<hr>";
            echo '<a href="check_cookie.php">クッキーを確認する</a>';
            } else {
            echo '<span class = "error">クッキーが利用できませんでした。</span>';
        }
    ?>
</div>
</body>
</html>