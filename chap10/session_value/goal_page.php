<?php
require_once("../../lib/util.php");
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認ページ</title>
    <alink href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
        if (isset($_SESSION["coupon"])) {
            $coupon = $_SESSION["coupon"];
            $couponList = ["ABC123", "XYZ999"];
            if (in_array($coupon, $couponList)) {
                echo es($coupon), "は、正しいクーポンです。";
            } else {
                echo es($coupon), "は誤ったクーポンです。";
            }
        } else {
            echo "セッションエラーです。";
        }
        ?>
    </div>
</body>

</html>