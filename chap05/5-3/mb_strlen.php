<?php
function price($str){
    $kakaku = 3000;
    $length = mb_strlen($str);
    
    if($length>10){
        $kakaku += ($length-10)*100;
    }
    
    $kakaku = number_format($kakaku);
    $result= "{$length}文字{$kakaku}円";
    return $result;
}

?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>文字数によって料金を計算する</title>
</head>
<body>
    <pre>
    <?php
    $msg1="Hello World!";
    $msg2="はろーワールド";
echo price($msg1);
echo "\n";
echo price($msg2);
    ?>
    </pre>
</body>
</html>