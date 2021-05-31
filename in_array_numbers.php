<?php
$numberList = [1008, 1234, 1301];
$numbers = [1301,1206,1008,1214];

function checkNumber($no){
    global $numbers;
    if(in_array($no, $numbers)){
        echo "{$no}番は合格です。";
    } else {
        echo "{$no}番は不合格です。";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>配列を検索する</title>
</head>
<body>
    <?php
        echo "<ol>\n";
        foreach($numberList as $value){
            echo "<li>",checkNumber($value)."</li>";
        }
        echo "</ol>\n";
    ?>
</body>
</html>