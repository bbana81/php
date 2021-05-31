<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>SplFileObjectでcsvファイルを読み込む</title>
</head>
<body>
<div>
    <?php 
    $filename = "mydata.csv";
    try{
        $fileObj =new SplFileobject($filename,"rb");
    }catch(Exception $e){
        echo '<span class="error">エラーがありました。</span><br>';
        echo $e->getmessage();
        exit();
    }
    
    $fileObj->setFlags(SplFileObject::READ_CSV|SplFileObject::READ_AHEAD|SplFileObject::SKIP_EMPTY|SplFileObject::DROP_NEW_LINE);
    
    echo "<table>";
    echo "<thead><tr>";
    echo "<th>","ID","</th>";
    echo "<th>","商品名","</th>";
    echo "<th>","価格","</th>";
    echo "</tr></thead>";
    
    echo "<tbody>";
    foreach ($fileObj as $row) {
        list($id, $name, $price) = $row;
        if($price=="") {
            continue;
        }
        
        echo "<tr>";
        echo "<td>",$id,"</td>";
        echo "<td>",$name,"</td>";
        echo "<td>",$price,"</td>";
        //echo "<td>",$number_format($price),"</td>";
        echo "</td>";
    }
    
    echo "</tbody>";
    echo "</table>";
    ?>
    
</div>
</body>
</html>