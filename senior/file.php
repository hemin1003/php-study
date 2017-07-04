<?php
//打开文件
$file = fopen("welcome.txt", "r") or exit("unable to open file!");

//判断文件内容是否读取到了末尾
while(!feof($file)){
    //逐行读取文件内容
    //echo fgets($file);
    
    //逐字符读取文件内容
    echo fgetc($file);
}

//关闭文件
fclose($file);