<form method="GET">
  <input type="text" name="username">
  //The Name Attribute will be put into the _GET inside of php 
  <input type="submit" value="Submit">
 </form>
  
<?php
$var = $_GET("TestUser1");
echo ($var);
?>
