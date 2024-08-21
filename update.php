<?php

// Include the database connection file
require 'conn.php';

// Check if the form has been submitted via POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Retrieve form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    // Initialize an array to hold any error messages
    $errors = [];

    // Validate form data
    if (empty($id)) {
        $errors[] = 'ID is required.';
    }

    if (empty($name)) {
        $errors[] = 'Name is required.';
    }

    if (empty($email)) {
        $errors[] = 'Email is required.';
    }

    if (empty($age)) {
        $errors[] = 'Age is required.';
    }

    // If there are no errors, proceed to update data in the database
    if (empty($errors)) {
        try {
            // Prepare SQL statement to update user data in the database
            $sql = "UPDATE users SET name = '$name', email = '$email', age = $age WHERE id = $id";
            $conn->exec($sql);

            // Success message
            echo "Record updated successfully";
        } catch (PDOException $e) {
            // Add error message if there is an issue with the SQL execution
            $errors[] = "Error: " . $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>

<body>
    <h1>Update a User</h1>
    <!-- Form to update an existing user -->
    <form method="post">
        <label>ID: <input type="number" name="id"></label><br><br>
        <label>Name: <input type="text" name="name"></label><br><br>
        <label>Email: <input type="email" name="email"></label><br><br>
        <label>Age: <input type="number" name="age"></label><br><br>

        <input type="submit" value="Update">
    </form>

    <?php
    // Display any errors if present
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    }
    ?>

    <!-- Navigation buttons to other pages -->
    <div>
        <span><button><a href="create.php">Create</a></button></span>
        <span><button><a href="read.php">Read</a></button></span>
        <span><button><a href="update.php">Update</a></button></span>
        <span><button><a href="delete.php">Delete</a></button></span>
    </div>
</body>

</html>
