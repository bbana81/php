<?php
$teamA = ["赤井一郎","伊藤五郎","上野信二"];
$teamB = ["江藤幸代","小野幸子"];

function teamList($teamname, $namelist){
    echo "{$teamname}". "\n";
    echo "<ol>", "\n";
    for ($i=0; $i<count($namelist); $i++){
        echo "<li>", $namelist[$i], "</li>\n";
    }
    echo "</ol>\n";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>名前の配列</title>
</head>
<body>
    <?php
    teamList('Aチーム', $teamA);
    teamList('Bチーム', $teamB);
    ?>
</body>
</html>