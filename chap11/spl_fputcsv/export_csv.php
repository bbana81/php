<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SplFileObjectでCSVファイルに書き込む</title>
    <link href="../../css/style.css" rel="stylesheet">
</head>
<body>
<div>
    <?php
    $filename="mydata.csv";
    $csv_header=["id", "名前","年齢","趣味"];
    $csv_data = [];
    $csv_data[] = ["a10","高橋美玖","36","沢登り"];
    $csv_data[] = ["a11","手塚雄一","31","トレラン"];
    $csv_data[] = ["a12","戸高栄里","18","料理"];
    $csv_data[] = ["a13","迫田真治","23","ボルダリング"];
    $csv_data[] = ["a14","山岡南美","26","サーフィン"];

    try{
        $fileObj = new SplFileObject($filename, "wb");
    }catch(Exception $e){
        echo '<span class="error">エラーがありました。</span><br>';
        echo $e->getMessage();
        exit();
    }
    $fileObj->fputcsv($csv_header);

    foreach($csv_data as $value){
        $fileObj->fputcsv($value);
    }
    echo "{$filename}の書き出しが終わりました。";
    ?>
</body>
</html>