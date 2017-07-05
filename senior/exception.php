<?php
function checkNum($num){
    if($num>1){
        throw new Exception("Value must be 1 or lower");
    }
    return true;
}

try {
    checkNum(2);
    echo "会执行吗";
}catch (Exception $e){
    echo $e->getMessage();
}
