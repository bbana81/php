<?php
$data = ["R5","E2","E6","A8","R1","G8"];
$pattern = "/['A'|'R']/";
$result = preg_grep($pattern, $data, PREG_GREP_INVERT);
echo "該当しない".count($result)."件\n";
$resultString = implode("\n", $result);
echo $resultString;
?>