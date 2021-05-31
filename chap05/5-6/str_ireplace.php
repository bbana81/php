<?php
$subject ="Apple Pie";

$result = str_ireplace("P","?",$subject,$count);
echo "置換前：{$subject}","\n<br>";
echo "置換後：{$result}","\n<br>";
echo "個数：",$count;
?>