<?php
session_start();

// Connection to database
$Connect = mysqli_connect('localhost', 'root', '', 'e_user');

if (!$Connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Initialize variables for form input and error messages
$Name = $Phone = $Email = $Password = "";
$nameErr = $phoneErr = $emailErr = $passwordErr = "";

// Handle form submission
if (isset($_POST['RegisterUser'])) {
    $Name = $_POST['Fullname'];
    $Phone = (string) $_POST['Phone'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Picture = $_FILES['profilepic']['name'];
    $Picture1 = $_FILES['profilepic']['tmp_name'];

   


    // Validate name
    if (empty($Name)) {
        $nameErr = "Name is required";
    }

    // Validate phone number
    if (!preg_match('/^[0-9]{10}$/', $Phone)) {
        $phoneErr = "Invalid phone number";
    }

    // Validate email 
    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    // Validate password
    $PassPattern = '/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
    if (!preg_match($PassPattern, $Password)) {
        $passwordErr = "Invalid password format. Password must be at least 8 characters long, contain at least one uppercase letter, one lowercase letter, one number, and one special character from @$!%*?&";
    }

    // If all inputs are valid, insert into database
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
}

?>

<!-- HTML form with error messages$_COOKIE -->
<link rel="stylesheet" href="L1.css">
<form method="post" action="ValidRegister.php"class="Container">
    <div class="Label1">
        <label>Name:</label>
     <input type="text" name="Fullname" value="<?php echo $Name; ?>">
    <span class="error"><?php echo $nameErr; ?></span>
    </div>
    <div class="Label1">
    <label>Phone:</label>
     <input type="text" name="Phone" value="<?php echo $Phone; ?>">
    <span class="error"><?php echo $phoneErr; ?></span>
    </div>
    <div class="Label1">
        <label>Email: </label>
    <input type="text" name="Email" value="<?php echo $Email; ?>">
    <span class="error"><?php echo $emailErr; ?></span>
    </div>
    <div class="Label1">
        <label>Password:</label>
     <input type="password" name="Password" value="<?php echo $Password; ?>">
    <span class="error"><?php echo $passwordErr; ?></span>
    </div>
    <div class="Label1">
                <label>Picture:</label>
                <input type="file" name="profilepic" placeholder="Choose the Picture" required>
            </div>
    <button type="submit" name="Reg" style="margin-top:5px;">Sign Up</button>
<hr>
</form>


