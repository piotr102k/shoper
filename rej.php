<?php
if(!empty($_POST['rlogin']))
{
    
    require('connect.php');
    
    $txt=$_POST['rlogin'];
    $txt=htmlentities($txt);
    $txt2=$_POST['rpass'];
    $txt2=hash('sha256',$txt2);


    $query = "insert into user values('','{$txt}','{$txt2}','0')";
    $result = mysqli_query($connection, $query);
    if($result) header("Location:index.php?status=ok");
    else header("Location:index.php?status=error");
    
    exit();
}
header("Location:index.php?status=error"); 
?>