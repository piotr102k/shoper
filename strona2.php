<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
</head>
<body style="background-color:black">
    <div style="background-color:gray;width:75%;margin:auto;height:800px">
    <a href="index.php" style="color:black;float:right;font-size:40px;text-decoration: none;">X</a>
<?php
session_start();
if(!isset($_SESSION['tyt']))
{
echo'
<div style="width:75%;height:50%;margin:auto;padding-top:25px">
    <form action="dodaj.php" id="form">
    <textarea id="1" name="title" form="form" rows="1" cols="129"></textarea> <br><br>
    <textarea id="2" name="text" form="form" rows="40" cols="129"></textarea> <br>
  <input type="submit" value="DODAJ POST">



</form>
</div>
';
}
else
{
  
  
  $txt=$_SESSION['txt'];
  $txt2=$_SESSION['tyt'];
  echo"
  <div style='width:75%;height:50%;margin:auto;padding-top:25px'>
      <form action='edit.php' id='form'>
      <textarea id='1' name='title' form='form' rows='1' cols='129'>{$txt2}</textarea> <br><br>
      <textarea id='2' name='text' form='form' rows='40' cols='129'>{$txt}</textarea> <br>
    <input type='submit' value='EDIT'>
  
  
  
  </form>
  </div>
  ";




}



?>
</div>




</body>
</html>