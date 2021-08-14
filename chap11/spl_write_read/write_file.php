<?php
$date = date("Y/n/j G:i:s", time());
$writedata = <<< "EOD"
ヒアドキュメントならば、
途中で改行したり、
変数を使った文章が作られますね。
更新日：$date
EOD;
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>SplFielObjectでファイルに保存</title>
</head>
<body>
    <div>
        <?php
        $filename = "mytext.txt";
        try{
            $fileObj = new SplFileObject($filename, "ab");
        }catch(Exception $e) {
            echo '<span class ="error">エラーがありました。</span><br>';
            echo $e->getMessage();
            exit();
        }
        
        $written = $fileObj->fwrite($writedata);
        if($written===FALSE){
            echo '<span class="error">ファイルに保存できませんでした。</span>';
        }else{
            echo "SplFileObjectのfwriteを使って、<br>{$filename}バイトを書き込みました。","<hr>";
            echo '<a href="read_file.php">ファイルを読む</a>';
        }
        ?>
        
    </div>
</body>
</html>