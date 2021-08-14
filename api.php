<?php

$url = "https://qiita.com/api/v2/items";

// cURLセッションを初期化
$ch = curl_init();

// オプションを設定
curl_setopt($ch, CURLOPT_URL, $url); // 取得するURLを指定
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // 実行結果を文字列で返す
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // サーバー証明書の検証を行わない

// URLの情報を取得
$response =  curl_exec($ch);

// 取得結果を表示
echo $response;
$result = json_decode($response, true);

// セッションを終了
curl_close($conn);

?>