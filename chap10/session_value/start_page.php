<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>セッション開始ページ</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        このページから購入するとクーポン割引が適用されます。<br>
        <?php
        $_SESSION["coupon"] = "ABC123";
        ?>
        <a href="goal_page.php">次のページ</a>
    </div>
</body>

</html>