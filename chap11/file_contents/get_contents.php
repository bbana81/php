<?php
require_once("../../lib/util.php");
?>

<?php
$filename = "mytext.txt";

$result = file_exists($filename);

if ($result) {
    $readdata = file_get_contents($filename);

    $readdata = es($readdata);
    $readdata_br = nl2br($readdata, false);

    echo "{$filename}を読み込みました。", "<br>";
    echo $readdata_br, "<br>";
    echo '<a href="put_contents.php">ファイルに書き込む</a>', "<br>";
} else {
    echo  '<span class="error">ファイルを読み込めませんでした。', "<br>";
}
?>
