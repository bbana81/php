<?php
require_once("Staff.php");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staffクラスメンバーを使う</title>
</head>
<body>
    <pre>
        <?php
        Staff::deposit(100);
        Staff::deposit(150);

        echo Staff::$piggyBank, "円になりました。\n";

        $hana = new Staff("花", 21);
        $hana->latePenalty();

        echo Staff::$piggyBank, "円になりました。\n";
        ?>
    </pre>
</body>
</html>