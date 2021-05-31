<?php
$myArray = ["a", "b", "c", "d", "e"];
$removed = array_splice($myArray, 1, 3);
echo '実行後：$myArray', "\n";
print_r($myArray);
echo '戻り：$removed', "\n";
print_r($removed);
?>