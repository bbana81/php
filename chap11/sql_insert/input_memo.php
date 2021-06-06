<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>１行メモの入力</title>
    <link href="../../css/style.css" rel="stylesheet">
    <style type="text/css">
        input.memofield{width: 300px;}
    </style>
</head>
<body>
    <div>
        <form method="POST" action="write_memofile.php">
            <ul>
                <li><label>memo:<input name="memo" class="memofield" placeholder="メモ書く"></input></label></li>
                <li></li>
            </ul>
        </form>
    </div>
</body>
</html>