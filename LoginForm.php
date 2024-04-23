<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login In</title>
    <link rel="stylesheet" href="L1.css">
    <style>
        
.Container:hover
{
  border: 4px solid rgb(251, 253, 253);
  transform: scale(1.1);
    /* box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); */
}




body {
  /* width: 40%; */
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  height: auto;
}

.Container {
  background-color: #fff;
  padding: 20px;
  border-radius: 8px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  width: 22%;
}

.Label1 
{
  margin-bottom: 9px;
}

label 
{
  display: block;
  margin-bottom: 8px;
}

input {
  width: 100%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  background-color: #007bff;
  color: #fff;
  padding: 10px;
  border: none;
  border-radius: 4px;
  /* cursor: pointer; */
}

button:hover {
  background-color: #0056b3;
}

a {
  color: #007bff;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
  font-weight: 700;
}


    </style>
</head>

<body>
    <form action="Validation.php" method="post" class="Container">
        <b>
            <h1>Login</h1>
        </b>
        <b>
            <p>Already,Have a Account Just Login</p>
        </b>
        <hr>
        <div class="Label1">
            <label>Name:</label>
            <input type="text" name="Fullname" placeholder="Enter your Name" required>
        </div>
        <div class="Label1">
            <label>Email:</label>
            <input type="text" name="Email" placeholder="Enter your Email" required>
        </div>
        <div class="Label1">
            <label> Password:</label>
            <input type="password" name="Password" placeholder="Enter your Password" required>
        </div>
        <button type="submit">Login</button>
        <hr>
        <p>New to Cara Create Account? <a href="SignUpForm.php"><b>Sign Up</b></a></p>
    </form>
    

</body>

</html>