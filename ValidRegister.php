<?php
session_start();

// Connection to database
$Connect = mysqli_connect('localhost', 'root', '', 'e_user');

if (!$Connect) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['Reg'])) {
    $Name = $_POST['Fullname'];
    $Phone = (string) $_POST['Phone'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Picture = $_FILES['profilepic']['name'];
    $Picture1 = $_FILES['profilepic']['tmp_name'];

}
if (empty($nameErr) && empty($phoneErr) && empty($emailErr) && empty($passwordErr)) 
{
    move_uploaded_file($Picture1,"Img");
 $query = "INSERT INTO user (Fullname, Phone, Email, Password,profilepic) VALUES ('$Name', '$Phone', '$Email', '$Password','$Picture')";
 if (mysqli_query($Connect, $query)) {
     echo "User added successfully";
     // echo "<scrpit>alert('Data Inserted Successfully')</script>";
     header('location:LoginForm.php');
     exit;
 } else {
     echo "Error: " . mysqli_error($Connect);
 }
}
 ?>