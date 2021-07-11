<?php
require_once("Runner.php");
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Runnerクラスを利用する</title>
</head>

<body>
    <?php
    $runner1 = new Runner("福土", 23);
    $runner1->who();
    ?>
</body>

</html>