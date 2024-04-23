<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['User'])) {
    header('location:LoginForm.php');
    exit;
}

// Connection to database
$Connect = mysqli_connect('localhost', 'root', '', 'e_user');

if (!$Connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get user ID from session
$userId = $_SESSION['User'];

// Fetch user data from the database
$query = "SELECT * FROM user WHERE Fullname = '$userId'";
$result = mysqli_query($Connect, $query);

if (!$result) {
    die("Error: " . mysqli_error($Connect));
}

$userData = mysqli_fetch_assoc($result);

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve updated user information from form
    $Name = $_POST['Fullname'];
    $Phone = $_POST['Phone'];
    $Email = $_POST['Email'];
    // Process file upload
    $Picture = ''; // Default value if no file is uploaded
    if (isset($_FILES['Picture']) && $_FILES['Picture']['error'] == 0) {
        $uploadDir = 'uploads/'; // Directory to upload files
        $uploadFile = $uploadDir . basename($_FILES['Picture']['name']);
        echo "File name: " . $_FILES['Picture']['name'] . "<br>"; // Debug statement
        echo "Temporary file path: " . $_FILES['Picture']['tmp_name'] . "<br>"; // Debug statement
        if (move_uploaded_file($_FILES['Picture']['tmp_name'], $uploadFile)) {
            $Picture = $uploadFile; // Set picture path if upload is successful
            echo "File uploaded successfully. Path: " . $Picture . "<br>"; // Debug statement
        } else {
            echo "Error uploading file";
        }
    } else {
        echo "No file uploaded or file upload error occurred";
    }

    // Update user information in the database
    $updateQuery = "UPDATE user SET Fullname = '$Name', Phone = '$Phone', Email = '$Email', profilepic ='$Picture' WHERE Fullname = '$userId'";
    if (mysqli_query($Connect, $updateQuery)) {
        echo "Profile updated successfully";
        header('location:index.php');
        exit;
    } else {
        echo "Error: " . mysqli_error($Connect);
    }
}
?>

<!-- Update Profile Form -->
<link rel="stylesheet" href="L1.css">
<form method="post" class="Container" enctype="multipart/form-data"> <!-- Add enctype attribute -->
    <b>
        <h1>Update Profile</h1>
    </b>
    <hr>
    <div class="Label1">
        <label>Full Name:</label>
        <input type="text" name="Fullname" value="<?php echo $userData['Fullname']; ?>" required>
    </div>
    <div class="Label1">
        <label>Phone:</label>
        <input type="tel" name="Phone" value="<?php echo $userData['Phone']; ?>" required>
    </div>
    <div>
        <label class="Label1">Email:</label>
        <input type="email" name="Email" value="<?php echo $userData['Email']; ?>" required>
    </div>
    <div class="Label1">
        <label>Picture:</label>
        <input type="file" name="Picture">
    </div>
    <button type="submit" style="margin-top:5px;">Update Profile</button>
    <hr>
</form>