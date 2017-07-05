<?php
$name = "welcome.txta";
if(!file_exists($name)){
    die("文件不存在");
}else {
    $file = fopen($name, "r");
}
echo "还会执行吗";