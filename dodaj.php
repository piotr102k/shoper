<?php
if(!empty($_GET['title']))
{
    session_start();
    require('connect.php');
    $id=$_SESSION['id'];
    if(isset($id))
    {
    $txt=$_GET['title'];
    $txt2=$_GET['text'];
    $txt=htmlentities($txt);
    $txt2=htmlentities($txt2);
    $query = "insert into post values('','{$txt}','{$txt2}','0','0','{$id}')";
    $result = mysqli_query($connection, $query);
    if($result) header("Location:index.php?status=ok");
    else header("Location:index.php?status=error10");
    exit();
    }
    header("Location:index.php?status=error20");
    exit();
}
header("Location:index.php?status=error30"); 
?>