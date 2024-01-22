<?php
require_once '../config/database.php'; // Adjust the path as needed

// Fetch all posts from the database
$sql = "SELECT id, title, content, created_at FROM posts ORDER BY created_at DESC";
$stmt = $pdo->query($sql);

echo "<div class='posts-list'>";
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<div class='post'>";
    echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
    echo "<p>" . substr(htmlspecialchars($row['content']), 0, 150) . "...</p>";
    echo "<a href='view_post.php?id=" . $row['id'] . "'>Read More</a> | ";
    echo "<a href='edit_post.php?id=" . $row['id'] . "'>Edit</a> | ";
    echo "<a href='delete_post.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure?\");'>Delete</a>";
    echo "</div>";
}
echo "</div>";
?>
