<?php
require_once '../../config/database.php';

$title = $content = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $content = $_POST['content'];
    $user_id = $_SESSION['id']; // Assuming the user is logged in and $user_id is available

    $sql = "INSERT INTO posts (user_id, title, content) VALUES (:user_id, :title, :content)";
    
    if ($stmt = $pdo->prepare($sql)) {
        $stmt->bindParam(":user_id", $user_id, PDO::PARAM_INT);
        $stmt->bindParam(":title", $title, PDO::PARAM_STR);
        $stmt->bindParam(":content", $content, PDO::PARAM_STR);

        if($stmt->execute()) {
            // Redirect to index page
            header("location: ../index.php");
        } else {
            echo "Something went wrong. Please try again later.";
        }
        unset($stmt);
    }
    unset($pdo);
}
