<?php
require_once("Staff.php");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staffクラスを読み込んで利用する</title>
</head>

<body>
    <pre>
        <?php
        $hana = new Staff("花", 21);
        $taro = new Staff("太郎", 35);

        $hana->hello();
        $taro->hello();
        ?>
    </pre>
</body>

</html>