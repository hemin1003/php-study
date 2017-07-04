<?php
setcookie("user", "runoob", time() + 3600);

// $expire=time()+60*60*24*30;
// setcookie("user", "runoob", $expire);

// echo $_COOKIE["user"];

// 查看所有 cookie
print_r($_COOKIE);
echo "<br>";
echo "<br>";

//删除
setcookie("user", "", time()-3600);
?>

<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>

<?php

if (isset($_COOKIE["user"]))
    echo "欢迎 " . $_COOKIE["user"] . "!<br>";
else
    echo "普通访客!<br>";

?>

</body>
</html>