<?php
$data = ["a987","鈴木",23];
list($id, $name, $age) = $data;
echo "会員ID：",$id, "\n";
echo "お名前：",$name, "\n";
echo "年齢：", $age, "\n";

$data = [23,16,8,42,15,4];
sort($data);
print_r($data);
rsort($data);
print_r($data);

$data = ["S"=>23, "M"=>36, "L"=>29];
asort($data);
print_r($data);

$nameList = ["田中","鈴木","佐藤","杉田"];
shuffle($nameList);
print_r($nameList);
?>