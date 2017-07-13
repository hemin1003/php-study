<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}

$sql = "update MyGuests set firstname='hemin' where id=19";
$result = $conn->query($sql);

echo "更新成功";

$conn->close();