<?php
$namelist=["m01"=>"田中達也","m02"=>"佐々木真一","w01"=>"新井貴子","w02"=>"笠井　香"];
$agelist=["m01"=>34,"m02"=>42,"w01"=>28,"w02"=>41];

function getAge($name){
  global $namelist;
  global $agelist;

  $key  = array_search($name ,$namelist );
  if($key!==false){
    $age=$agelist[$key];
    echo "{$name}さんは{$age}歳です。";
  }else {
    echo "「{$name}」はメンバーではない。";
  }
}

echo getAge("新井貴子"), "\n";
echo getAge("田中達也"), "\n";
echo getAge("林　純一"), "\n";
echo getAge("佐々木真一"), "\n";
 ?>
