<?php
function myFunc(){
    $allArgs = func_get_args();
    $total = array_sum($allArgs);
    $numArgs = func_num_args();
    
    if($numArgs>0){
        $average = $total/$numArgs;
        $lastValue = func_get_arg($numArgs-1);
    }else{
        $lastValue = $total = $average = "(データ無し)";
    }
    
    echo "合計点 ",$total, "<br>";
    echo "平均点 ",$average, "<br>";
    echo "最後の点数 ",$lastValue, "<br>";
}

myFunc();
?>