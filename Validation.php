<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php

session_start();

$Connect=mysqli_connect('localhost','root','','e_user');

if($Connect)
{
echo"Connection Successful";
}
else
{
echo"Error Occured";
}

mysqli_select_db($Connect,'e_user');

$Name=$_POST['Fullname'];
$Email=$_POST['Email'];
$Password=$_POST['Password'];


$Query="select * from user where Email='$Email' AND Password='$Password'";
$Result=mysqli_query($Connect,$Query);

echo "Email: $Email  & Password: $Password";

$NRows=mysqli_num_rows($Result);
if($NRows==1)
{
$_SESSION['User']=$Name;
header('location:index.php');
}
else
{
    echo "Error";
header('location:LoginForm.php');
}
?>