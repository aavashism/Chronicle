<?php
// Assuming database connection is already established
require_once '../config/database.php';

echo "<h2>Latest Blog Posts</h2>";

$sql = "SELECT id, title, content FROM posts ORDER BY created_at DESC LIMIT 5";
$stmt = $pdo->query($sql);

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    echo "<div>";
    echo "<h3>" . htmlspecialchars($row['title']) . "</h3>";
    echo "<p>" . substr(htmlspecialchars($row['content']), 0, 200) . "...</p>";
    echo "<a href='post.php?id=" . $row['id'] . "'>Read More</a>";
    echo "</div>";
}
?>
