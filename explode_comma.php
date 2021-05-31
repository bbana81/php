<?php
$data = "赤井一郎,伊藤　淳,上野信二";
$delimiter = ",";
$nameList = explode($delimiter, $data);
print_r($nameList);

$glue = "さん、";
$glueList = implode($glue, $nameList);
print_r($glueList);
?>