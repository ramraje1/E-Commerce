<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="ContactUs.css">

</head>

<body>
    <form >
        <div class="Container">
            <b>
                <h1>Sign Up</h1>
            </b>
            <b>
                <p>Please fill this form to create an account.</p>
            </b>
            <hr>
            <div class="Label1">
                <label>Full Name:</label>
                <input type="text"  name="Fullname" placeholder="ABC XYZ" required>
            </div>

            <div class="Label1">
                <label>Phone:</label>
                <input type="tel" name="Phone" placeholder="91******03" required>
            </div>

            <!-- Email -->
            <div class="Label1">
                <label>Email:</label>
                <input type="email" name="Email" placeholder="ABC@Gmail.com" required>
            </div>

            <!-- Message -->
            <div class="Label1">
                <label>Message:</label>
                <input type="textarea" name="Message"  required>
            </div>

            <!-- Password -->
            <!-- <div class="Label1">
                <label>Password:</label>
                <input type="password" name="Password" placeholder="Enter your password" required>
            </div> -->

            <button type="submit">Send Now</button>
            <hr>

            <!-- <p>Already have an account? <a href="LoginForm.php"><b>Login</b></a></p> -->
        </div>
    </form>
</body>

</html>


