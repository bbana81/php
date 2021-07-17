<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS対策 es()</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
    <div>
        <pre>
            <?php
                require_once("../../lib/util.php");
                $myCode = "<h2>テスト１</h2>";
                $myArray = ["a"=>"<p>赤</p>", "b"=>"<script>alert('hello')</script>"];

                echo '$myCodeの値:',es($myCode);
                echo "\n\n";
                echo '$myArrayの値:';
                print_r(es($myArray));
            ?>
        </pre>
    </div>
</body>
</html>