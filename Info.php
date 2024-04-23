<?php 

session_start();
echo "Hello, Im".$_SESSION['FullName'];
echo "Pass=".$_SESSION['Password'];
?>