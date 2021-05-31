<?php
function holiday($youbi){
    if(($youbi=="土曜日")||($youbi=="日曜日")){
        echo $youbi,"はお休みです。\n","<br>";
    }else{
        echo $youbi,"はお休みではありません。\n","<br>";
    }
}

holiday("金曜日");
holiday("土曜日");
holiday("日曜日");
?>