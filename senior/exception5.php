<?php

// set_exception_handler() 函数可设置处理所有未捕获异常的用户定义函数。
function myException($exception)
{
    echo "<b>Exception:</b> ", $exception->getMessage();
}

set_exception_handler('myException');

throw new Exception('Uncaught Exception occurred');