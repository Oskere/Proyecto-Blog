<?php 
session_start();

session_destroy();
header("Location: V_LogIn.php");

?>