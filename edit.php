

<?php
if(!empty($_GET['title']))
{
    session_start();
    require('connect.php');
    $id=$_SESSION['id'];
    $id_post=$_SESSION['id_post'];
    $query = "select tworca from post where id={$id_post}";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
    $admin=$_SESSION['admin'];
    if($row[0]==$id or $admin==1)
    {
    $txt=$_GET['title'];
    $txt2=$_GET['text'];
    $txt=htmlentities($txt);
    $txt2=htmlentities($txt2);
    $query = "update post set text='$txt2', tytul='$txt' where id={$id_post}";
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
