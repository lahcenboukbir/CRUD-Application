<?php

// Include the database connection file
require 'conn.php';

// Check if the form has been submitted via POST method
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Retrieve the ID from the form
    $id = $_POST['id'];

    // Initialize an array to hold any error messages
    $errors = [];

    // Validate that the ID is provided
    if (empty($id)) {
        $errors[] = 'ID is required.';
    }

    // If there are no errors, proceed to delete the record from the database
    if (empty($errors)) {
        try {
            // Prepare SQL statement to delete the user from the database
            $sql = "DELETE FROM users WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->execute([':id' => $id]);

            /*
            Using a parameterized query with placeholders (:id) helps prevent SQL injection attacks 
            by ensuring that user input is treated as data, not executable code.
            */

            // Redirect to the read page after successful deletion
            header("Location: read.php");
            exit;
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
    <title>Delete</title>
</head>

<body>
    <h1>Delete a User</h1>
    <!-- Form to delete an existing user -->
    <form method="post">
        <label>ID: <input type="number" name="id"></label><br><br>

        <input type="submit" value="Delete"><br><br>
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
