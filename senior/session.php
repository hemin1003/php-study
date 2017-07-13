<?php
    session_start();
    $_SESSION["view"] = 1;
    
    if(isset($_SESSION['views']))
    {
        $_SESSION['views']=$_SESSION['views']+1;
    }
    else
    {
        $_SESSION['views']=1;
    }
?>

<html>
<body>
<?php 
    echo "浏览量：" . $_SESSION["views"];
?>
</body>
</html>
<?php 
    if(isset($_SESSION["views"])){
        if($_SESSION["views"]>10){
            unset($_SESSION["views"]);
        }
    }
?>