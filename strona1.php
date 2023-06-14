<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body style="background-color:black">
    <div style="background-color:gray;width:75%;margin:auto;height:800px;">
  
    <a href="index.php" style="color:black;float:right;font-size:40px;text-decoration: none;">X</a>
<?php
session_start();
$id_post=$_GET['post'];
require('connect.php');
$query = "select * from post where id={$id_post}";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);

$_SESSION['id_post']=$id_post;
$_SESSION['txt']=$row[2];
$_SESSION['tyt']=$row[1];
$_SESSION['like']=$row[3];
$_SESSION['dlike']=$row[4];
$_SESSION['likuje']=0;

echo"<br><br>";
echo"<div id='dtit' style='width:75%;margin:auto;height:400px;background-color:white;'><span style='font-size:50px'>{$row[1]}</span><a href=del.php style='float:right;
text-decoration: none'>delete</a><a href=strona2.php?title={$row[1]},text={$row[2]} style='float:right;text-decoration: none'>edit &nbsp&nbsp</a><hr><span style='font-size:15px;word-wrap: 
break-word;'> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp {$row[2]}</span> <div style='margin-top:250px'>  <a style='float:right'>&nbsp&nbsp </a>
<a id='dislike' href='like.php?status=2' style='text-decoration:none;float:right;font-size:40px'>&#9520 $row[4]</a> <a style='float:right'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a>
<a id='like' href='like.php?status=1' style='text-decoration:none;float:right;font-size:40px'>&#9527 $row[3]</a> </div></div>";

if(isset($_SESSION['id']))
{
$query = "SELECT likeowane,dlikeowane FROM `liki` where id_user={$_SESSION['id']} and id_post={$id_post}";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);

if($row[0]==1)
{
    echo"<script>document.getElementById('like').style.backgroundColor='green' </script>";
    $_SESSION['likuje']=1;
}
if($row[1]==1 )
{
    echo"<script>document.getElementById('dislike').style.backgroundColor='red' </script>";
    $_SESSION['likuje']=2;
}
}   
?>



</div>




</body>
</html>