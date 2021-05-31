<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PDOでデータベースに接続する</title>
</head>
<body>
<div>
    <?php
    $user='testuser';
    $password='pw4testuser';
    
    $dbName='testdb';
    
    $host='localhost:8889';
    $dsn="mysql:host={$host};dbname={$dbName};charset=utf8";
    
    try{
        $pdo= new PDO($dsn,$user,$password);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "データベース{$dbName}に接続しました。";
        $pdo=null;
    }catch(Exception $e){
        echo '<span class="error">エラーがありました。</span><br>';
        echo $e->getMessage();
        exit();
    }
    ?>
</div>
</body>
</html>