<?php
session_start();
if(isset($_SESSION['id']))
{

    require('connect.php');
    $id=$_SESSION['id'];
    $id_post=$_SESSION['id_post'];
    $admin=$_SESSION['admin'];
    $query = "select tworca from post where id=$id_post and tworca=$id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
    if($row[0]==$id or $admin==1)
    {
    $query = "delete from post where id=$id_post";
    $result = mysqli_query($connection, $query);
    if($result) header("Location:index.php?status=ok");
    else header("Location:index.php?status=error100");
    exit();
    }
    header("Location:index.php?status=error200");
    exit();

}
header("Location:index.php?status=error300");
    exit();
?>