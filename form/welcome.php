欢迎
<?php 
echo $_REQUEST["fname"];
echo "<br>";
?>

你的年龄是
<?php 
echo $_REQUEST["age"];

try {
    throw new Exception('This is my exception location.');
}catch (Exception $e){
    echo $e->getMessage();
}

?>