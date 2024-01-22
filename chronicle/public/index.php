<?php require_once '../src/utils/check_login.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chronicle - Home</title>
</head>
<body>
    <h1>Welcome to Chronicle</h1>
    <a href="src/auth/login.php">Login</a> | <a href="src/auth/register.php">Register</a>
    <hr>
    <?php require_once '../src/blog/list_posts.php'; ?>
</body>
</html>
