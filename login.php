<?php
if(!empty($_POST['login']) and !empty($_POST['pass']))
{

    require('connect.php');
    $txt=$_POST['login'];
    $txt=htmlentities($txt);
    $txt2=$_POST['pass'];
    $txt2=hash('sha256',$txt2);
    $query = "select id,admin,login from user where login='{$txt}' and haslo='{$txt2}'";
    $result = mysqli_query($connection, $query);
    if($result){

        
        session_start();
        $row = mysqli_fetch_array($result);
        $_SESSION['id']=$row[0];
     
        $_SESSION['login']=$row[2];
        $_SESSION['admin']=$row[1];

    
     header("Location:index.php?status=ok");
        
     

    }
    else header("Location:index.php?status=error1");
    exit();
}
header("Location:index.php?status=error2"); 








?>