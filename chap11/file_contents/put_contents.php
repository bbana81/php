<?php
$date = date("Y/n/j G:i:s", time());
$writedata = <<< "EOD"
ヒアドキュメントならば、
途中で改行したり、
変数を使った文章が作られますね。
更新日：$date
EOD;
?>

<?php
$filename = "mytext.txt";

$result = touch($filename);

if ($result) {
    file_put_contents($filename, $writedata, LOCK_EX);
    echo "{$filename}にデータを書き出しました。", "<hr>";
    echo '<a href="get_contents.php">ファイルを読み込む</a>', "<hr>";
} else {
    echo '<span class="error">ファイルに保存できませんでした。</span>', "<hr>";
}
?>