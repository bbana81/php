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
        $filename= "memo.txt";
        try{
            $fileObj = new SplFileObject($filename, "rb");
        }catch(Exception $e){
            echo '<span class="error>エラーがありました。</span><br>';
            echo $e->getMessage();
            exit();
        }

        $fileObj->flock(LOCK_SH);
        $readdata = $fileObj->fread($fileObj->getSize());
        $fileObj->flock(LOCK_UN);

        if(!($readdata===FALSE)){
            $readdata = es($readdata);
            $readdata_br = nl2br($readdata, false);
            echo "{$filename}を読み込みました。","<br>";
            echo $readdata_br, "<hr>";
            echo'<a href="input_memo.php">メモ入力ページへ</a>';
        } else {
            echo '<span class="error">ファイルを読み込めませんでした。</span>';
        }
    ?>
</div>
</body>
</html>