<!DOCTYPE html>
<html lang="eng">
   <head>
      <meta charset="UTF-8">
      <mete http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width,initia-scale=1.0">
      <title>Document</title>
   </head>
   <body>
      <form action="indexs.php" method="get">
         
         <label>username:</label><br>
         <input type="text" name="username"><br>
         <label>Pasward:</label><br>
         <input type="password" name="password"><br>
         <input type="submit" value="log in">
      </form>
   </body>
 
</html>
<?php
   echo "{$_GET["username"]}<br>";
   echo $_GET["password"];
?>

