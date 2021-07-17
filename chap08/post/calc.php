<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォーム入力の値で計算する</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
            $tanka=$_POST['tanka'];
            $kosu=$_POST['kosu'];

            $price = $tanka*$kosu;
            $tanka=number_format($tanka);
            $kosu=number_format($kosu);

            echo "単価{$tanka}円*{$kosu}個は{$price}円です。"
        ?>
    </div>
</body>

</html>