<?php
$tax=0.08;

function taxPrice($tanka, $kosu){
    global $tax;
    $ryoukin = $tanka * $kosu * (1+$tax);
    echo "{$ryoukin}円です。";
}

taxPrice(250,4);
echo "税込み".$tax*100,"%";
?>