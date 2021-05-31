<?php
$pattern = "/201[2-5]/(AX/FX)/i";
$subject = "2011AX,2012Fx,2012AF,2013FX,2015ax,2016Fx";
$result = preg_match_all($pattern,$subject,$matches);

if($result===false){
echo "エラー:",preg_last_error();
}else if($result==0){
echo "マッチした形式はありません。";
}else{
echo "{$result}個マッチしました。\n";
echo implode("、",$matches[0]);
}
?>
