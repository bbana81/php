<?php
session_start();
require_once("../../lib/util.php");
?>

<?php
if (!cken($_POST)) {
    $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected encoding is " . $encoding;
    $isError = true;
    exit($err);
}
?>

<?php
$error = [];

if (empty($_SESSION['name'])) {
    $error[] = "名前を入力してください。";
} else {
    $name = $_SESSION['name'];
}
if (empty($_SESSION['kotoba'])) {
    $error[] = "好きな言葉を入力してください。";
} else {
    $kotoba = $_SESSION['kotoba'];
}

if (isset($_POST['dogcat'])) {
    $dogcat = $_POST['dogcat'];
    $_SESSION['dogcat'] = $dogcat;

    $diffValue = array_diff($dogcat, ["犬", "猫"]);
    if (count($diffValue) > 0) {
        $error[] = "犬好き猫好きの回答にエラーがありました。";
    }
    $dogcatString = implode("好きで、", $dogcat) . "好きです。";
} else {
    $dogcatString = "どちらも好きではありません。";
    $_SESSION['dogcat'] = [];
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認ページ</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body>
    <div>
        <form>
            <?php if (count($error) > 0) { ?>
                <span class="error"><?php echo implode('<br>', $error); ?></span><br>
                <span><input type="button" value="戻る" onclick="location.href='input.php'" ;></span>
            <?php } else { ?>
                <span>
                    名前:<?php echo es($name); ?><br>
                    言葉:<?php echo es($kotoba); ?><br>
                    犬猫好き?:<?php echo es($dogcatString); ?><br>
                    <input type="button" value="訂正する" onclick="location.href='input.php'">
                    <input type="button" value="送信する" onclick="location.href='thankyou.php'">
                </span>
            <?php } ?>
        </form>
    </div>
</body>

</html>