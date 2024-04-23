<?php
// Database connection
$Connect = mysqli_connect('localhost', 'root', '', 'e_user');

// Check connection
if (!$Connect) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle deletion
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST['id'];
    $query = "DELETE FROM user WHERE id = $id";
    $result = mysqli_query($Connect, $query);
    if ($result) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($Connect);
    }
}

// Fetch user entries from the database
$query = "SELECT * FROM user";
$result = mysqli_query($Connect, $query);

if (!$result) {
    die("Error: " . mysqli_error($Connect));
}
?>

<html>

<head>
    <style>
        /* Styles for table */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }

        .profile-pic {
            max-width: 100px;
            max-height: 100px;
        }

        .delete-link {
            color: red;
            cursor: pointer;
        }

        input {
            background-color: #007bff;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            /* cursor: pointer; */
        }

        input:hover {
            background-color: #0056b3;
        }
    </style>

</head>

<body>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Password</th>
                <th>ProfilePic</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['Fullname'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Phone'] . "</td>";
                echo "<td>" . $row['Password'] . "</td>";
                echo "<td>" . $row['profilepic'] . "</td>";
                echo "<td>";
                echo "<form method='post'>";
                echo "<input type='hidden' name='id' value='" . $row['id'] . "'>";
                echo "<input type='submit' name='delete' value='Delete'>";
                echo "</form>";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>

</html>