<?php
session_start();
if(!isset($_SESSION['username'])&& !isset($_SESSION['password']))
{
  header('Location:login.php');
}
else{  
// Destroying All Sessions
session_unset();

session_destroy();
header("Location: ../index.php");
}
?>