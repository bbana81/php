<?php
require_once("../../lib/util.php");
session_start();
?>

<?php
if(!cken($_POST)){
    $encoding = mb_internal_encoding();
    $err = "Encoding Error! The expected encoding is ". $encoding;
    exit();
}
?>

<?php
if(isset($_POST["name"])){
    $_SESSION["name"]=$_POST["name"];
}
if(isset($_POST["kotoba"])){
    $_SESSION["kotoba"]=$_POST["kotoba"];
}
$error =array();
if(empty($_SESSION["name"])){
    $error[] = "名前を入力してください。";
}else{
    $name = trim($_SESSION["name"]);
}
if(empty($_SESSION["kotoba"])){
    $error[] = "好きな言葉を入力してください。";
}else{
    $kotoba = trim($_SESSION["kotoba"]);
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>確認ページ</title>
    <link href="../../css/style.css" ref="stylesheet">
</head>
<body>
    <div>
        <form>
            <?php if (count($error)>0) { ?>
            <span class="error"><?php echo implode('<br>', $error);?></span><br>
            <span>
                <input type="button" value="戻る" onclick="location.href='input.html'">
            </span> 
            <?php } else {　?>
                <span>
                    名前：<?php echo es($name); ?><br>
                    好きな子言葉：<?php echo es($kotoba); ?><br>
                    <input type="button" value="戻る" onclick="location.href='input.html'">
                    <input type="button" value="送信する" onclick="location.href='thankyou.php'">
                </span>
            <?php } ?>
        </form>
    </div>
</body>
</html>