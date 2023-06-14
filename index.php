<!DOCTYPE html>
<html>
  <!-- css i html kradziony z w3 schools -->
<title>PROJEKT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1 {font-family: "Montserrat", sans-serif,background-color:gray}
img {margin-bottom: -7px}
.w3-row-padding img {margin-bottom: 12px}
</style>
<body>

<!-- Sidebar -->
<nav class="w3-sidebar w3-black w3-animate-top w3-xxlarge" style="display:none;padding-top:150px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-black w3-xxlarge w3-padding w3-display-topright" style="padding:6px 24px">
    <i class="fa fa-remove"></i>
  </a>
  <div class="w3-bar-block w3-center">
  <div class="w3-bar-item w3-text-grey">
  <form name="f1" method="post" action="login.php">
    login: <input type="text" name="login"><br>
    hasło: <input type="password" name="pass"><br>
    <input type="submit" value="login" name="button1"><br>
</form>
<br><br><br>
  </div>
  <div class="w3-bar-block">
  <form name="f3" method="post" action="rej.php">
    login: <input type="text" name="rlogin"><br>
    hasło: <input type="password" name="rpass"><br>
    <input type="submit" value="rejestracja" name="button3"><br>
</form>
  </div>
  </div>
</nav>

<!-- !PAGE CONTENT! -->
<div class="w3-content" style="max-width:1500px">


<!-- Header -->
<div class="w3-opacity">
<a id="wyl" href="wyloguj.php"  class="w3-button  w3-white w3-right" style="visibility: hidden;">WYLOGUJ</a>
<span id="tenclick" class="w3-button  w3-white w3-right" onclick="w3_open()"></span>



<div class="w3-clear"></div>
<header class="w3-center w3-margin-bottom">
  <h1><b>PROJEKT</b></h1>
  <p><b>Postuj co chcesz</b></p>
</header>
</div>

</div>
<div class=" w3-padding-16 w3-light-grey  w3-opacity" style="margin-top:0px;width:100%"> 
<a href="strona2.php" style="align:left;color:blue">DODAJ POST</a>


</div>

<!-- Photo Grid -->
<div class="w3-row" id="myGrid" style="margin-bottom:128px">

    
      <?php
session_start();
        unset($_SESSION['tyt']);
        unset($_SESSION['txt']);
        unset($_SESSION['likuje']);
require('connect.php');
$query = "select post.id,tytul,text,ilolike,ilodlike,login from post join user on tworca=user.id";
$result = mysqli_query($connection, $query);
$tak=mysqli_num_rows($result);
if($tak)
{
        $result = mysqli_query($connection, $query);
        while($row = mysqli_fetch_array($result))
    {
      echo"<div style='background-color:gray;height:50px;width:100%;border: 4px solid black'> &nbsp&nbsp<a href='strona1.php?post={$row[0]}' class='w3-button w3-opacity '>{$row[1]} </a>  <span style='float: right'>AUTOR {$row[5]}</span></div><br>";
    }
}
      ?>




</div>

<!-- End Page Content -->


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-light-grey w3-center w3-opacity w3-xlarge" style="margin-top:0px"> 
  
</footer>
<script>
function w3_open() {

 
  document.getElementById('mySidebar').style.width = '100%';
  document.getElementById('mySidebar').style.display = 'block';
  
  
}



// Open and close sidebar


function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
<?php

if(isset($_SESSION['login']))
{
$txt=$_SESSION['login'];
echo"<script> document.getElementById('tenclick').innerHTML='zalogowano jako:{$txt} <br> '</script>";
echo"<script> document.getElementById('wyl').style.visibility='visible'; </script>";
}
else
{
  echo"<script> document.getElementById('tenclick').innerHTML='LOGIN LUB REJESTRACJA '</script>";
  echo"<script> document.getElementById('wyl').style.visibility='hidden' </script>";
}
?>
</body>
</html>

