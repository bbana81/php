<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GETリクエスト処理</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <?php
            $no=$_GET['no'];
            $nolist=[3,5,7,8,9];

            if(in_array($no, $nolist)){
                echo "{$no}はありました。";
            } else { 
                echo "{$no}は見つかりません。";
            }
            ?>
    </div>
</body>

</html>