<?php
$pattern="/佐.+子/u";
$subject=<<<"names"

    佐藤有紀
    佐藤ゆう子
    増田智子
    杉田香

names;

$result = preg_match($pattern,$subject,$matches);
if($result===false){
    echo "エラー：", preg_last_error();
}else if($result==0){
    echo "マッチした値がありません。";
}else{
    echo "「",$matches[0],"」が見つかりました。";
}

?>