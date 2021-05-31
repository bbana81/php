<?php
function charge($rank, $days=1){
    switch($rank){
        case "A":
            $ryoukin = 15000 * $days;
            break;
        case "B":
            $ryoukin = 12000 * $days;
            break;
        default:
            $ryoukin = 8000 * $days;
            break;
    }
    return $ryoukin;
}

$kingaku1 = charge("B",2);
$kingaku2 = charge("A");



echo "金額１は{$kingaku1}円"."<br>".PHP_EOL;
echo "金額２は{$kingaku2}円"."<br>".PHP_EOL;


$kingaku3 = charge("");
echo "金額３は{$kingaku3}円";
?>