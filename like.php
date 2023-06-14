<?php
session_start();
require('connect.php');
if(isset($_SESSION['id']))
{
    $like=$_GET['status'];
    $id=$_SESSION['id'];
    $post=$_SESSION['id_post'];
    $ilike=$_SESSION['like'];
    $idlike=$_SESSION['dlike'];
    $ktore=$_SESSION['likuje'];

    if($ktore==0)
    {
    if($like==1)
    {
    $query = "insert into liki values('','1','0','$id','$post')";
    $result = mysqli_query($connection, $query);
    $ilike=$ilike+1;
    }
    else
    {
    $query = "insert into liki values('','0','1','$id','$post')";
    $result = mysqli_query($connection, $query);
    $idlike=$idlike+1;
    }
    }
    else
    {
        if($ktore==1)
        {
            if($like==1)
            {
                $query = "DELETE FROM liki where id_post={$post} and id_user={$id}";
                $result = mysqli_query($connection, $query);
                $ilike=$ilike-1;

            }
            else
            {
            $query = "update liki set likeowane='0',dlikeowane='1' where id_post={$post} and id_user={$id}";
            $result = mysqli_query($connection, $query);
            $idlike=$idlike+1;
            $ilike=$ilike-1;

            }
        }
        else
        {
            if($like==1)
            {
                $query = "update liki set dlikeowane='0',likeowane='1' where id_post={$post} and id_user={$id}";
                $result = mysqli_query($connection, $query);
                $ilike=$ilike+1;
                $idlike=$idlike-1;

            }
            else
            {
            $query = "DELETE FROM liki where id_post={$post} and id_user={$id}";
            $result = mysqli_query($connection, $query);
            $idlike=$idlike-1;

            }
        }




    }
    








    $query = "update post set ilolike='$ilike', ilodlike='$idlike' where id={$post}";
    $result = mysqli_query($connection, $query);



    if($result) header("Location:strona1.php?post=$post");
    else header("Location:strona1.php?post=$post");
    exit();


}
header("Location:index.php?login");
exit();


?>