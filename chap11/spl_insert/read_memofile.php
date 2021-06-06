<?php
require_once("../../lib/util.php");
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>メモを読み込む</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
    <div>
        <?php
        $filename = "memo.txt";
        try{
            $fileObj = new SplFileObject($filename, "rb");
        } catch (Exception $e){
            echo '<span class="error">エラーがありました。</span><br>';
            echo $e->getMessage();
            exit();
        }
        $fileObj->flock(LOCK_SH);
        $data = new LimitIterator($fileObj, 0, 5);
        foreach($data as $key => $value){
            echo sprintf("%02d: %s\n", $key+1, es($value)), "<br>";
        }
        $fileObj->flock(LOCK_UN);
        echo "<hr>", '<a href="input_memo.php">メモ入力ページへ</a>';
        ?>
    </div>
</body>
</html>