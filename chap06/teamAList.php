<?php
function teamArray(){
  $teamA =["赤井一郎","伊藤五郎","上野信二"];
  echo $teamA[0],"さん\n";
  echo $teamA[1],"さん\n";
  echo $teamA[2],"さん\n";
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>チーム配列</title>
</head>
<body>
  <?php
  teamArray();
  ?>
</body>
</html>
