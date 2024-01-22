<?php
require_once '../config/database.php'; // Adjust the path as needed
session_start();

// Check if user is logged in and is authorized
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
    exit;
}

// Check if an ID was passed
if (isset($_GET['id']) && !empty(trim($_GET['id']))) {
    $id = trim($_GET['id']);

    // Prepare a delete statement
    $sql = "DELETE FROM posts WHERE id = :id";
    
    if ($stmt = $pdo->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bindParam(":id", $id, PDO::PARAM_INT);
        
        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            // Redirect to blog list page after deletion
            header("location: index.php");
            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
    
    // Close statement
    unset($stmt);
} else {
    // If ID is not specified, redirect to error page or display an error
    echo "Error: ID not specified.";
}

// Close connection
unset($pdo);
?>
