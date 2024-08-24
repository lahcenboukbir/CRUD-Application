<?php

// Include the database connection file
require 'conn.php';

try {
    // SQL query to select all users from the 'users' table
    $sql = 'SELECT * FROM users';
    $stmt = $conn->query($sql); // Execute the query
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC); // Fetch all results as an associative array
    /* 
    PDO::FETCH_ASSOC fetches the data as an associative array, 
    making it easier to access the column values by their names.
    */

} catch (PDOException $e) {
    // Display an error message if the query fails
    echo "Error: " . htmlspecialchars($e->getMessage()); // Use htmlspecialchars to prevent XSS

    /*
    Using htmlspecialchars() prevents potential XSS (Cross-Site Scripting) attacks by converting special characters to HTML entities. 
    This is important for displaying error messages safely.
    */
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
</head>

<body>
    <h1>Read Users</h1>

    <!-- Message when no users are present -->
    <?php if (empty($users)): ?>
        <p>No users found.</p>
    <?php else: ?>

        <?php

        // Iterate over each user record and display their details
        foreach ($users as $user): ?>

            <ul>
                <li><strong>ID:</strong> <?php echo htmlspecialchars($user['id']); ?></li>
                <li><strong>Name:</strong> <?php echo htmlspecialchars($user['name']); ?></li>
                <li><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></li>
                <li><strong>Created at:</strong> <?php echo htmlspecialchars($user['created_at']); ?></li>
            </ul>

        <?php endforeach; ?>

    <?php endif; ?>

    <!-- Navigation buttons to other pages -->
    <div>
        <span><button><a href="create.php">Create</a></button></span>
        <span><button><a href="read.php">Read</a></button></span>
        <span><button><a href="update.php">Update</a></button></span>
        <span><button><a href="delete.php">Delete</a></button></span>
    </div>

</body>

</html>