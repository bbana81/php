<?php
$msg = "ありがとう";
$myFunc = function ($who) use ($msg){
    echo "{$who}さん、", $msg;
};

$myFunc("田中");
?>