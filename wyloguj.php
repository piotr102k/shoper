<?php
session_start();


        unset($_SESSION['id']);
        unset($_SESSION['like']);
        unset($_SESSION['login']);
        unset($_SESSION['admin']);
        


        echo"console.log('???');";
        header("Location:index.php?status=wylog");
        exit();
        ?>