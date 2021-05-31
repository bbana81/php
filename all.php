<?php
    $user='testuser';
    $password='pw4testuser';
    
    $dbName='testdb';
    
    $host='localhost:8889';
    $dsn="mysql:host={$host};dbname={$dbName};charset=utf8";
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>レコードを取り出す（AND）</title>
</head>
<body>
<div>
    <?php
    try{
        $pdo=new PDO($dsn, $user, $password);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        echo "データベース{$dbName}に接続しました。","<br>";
        
        $sql="INSERT member (name,age,sex) VALUES 
        ('菅田光子','31','女'),
        ('高田久美子','44','女'),
        ('青柳次郎','35','男')";
        
        $stm = $pdo->prepare($sql);
        $stm->execute();
        
        $sql="SELECT * FROM member";
        $stm=$pdo->prepare($sql);
        $stm->execute();
        $result=$stm->fetchAll(PDO::FETCH_ASSOC);
        
        echo "<table>";
        echo "<thead><tr>";
        echo "<th>","ID","</th>";
        echo "<th>","名前","</th>";
        echo "<th>","年齢","</th>";
        echo "<th>","性別","</th>";
        echo "</tr></thead>";
        echo "<tbody>";
        
        foreach($result as $row){
            echo "<tr>";
            echo "<td>",$row['id'],"</td>";
            echo "<td>",$row['name'],"</td>";
            echo "<td>",$row['age'],"</td>";
            echo "<td>",$row['sex'],"</td>";
            echo "</td>";
        }
        echo "</tbody>";
        echo "</table>";
    }catch(Exception $e){
        echo '<span class="error">エラーがありました。</span><br>';
        echo $e->getMessage();
        exit();
    }
    ?>
    
</div>
</body>
</html>