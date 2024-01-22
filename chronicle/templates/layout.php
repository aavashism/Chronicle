<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chronicle Blog</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Adjust the path as needed -->
</head>
<body>
    <header>
        <h1>Chronicle Blog</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <?php if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true): ?>
                <li><a href="src/blog/create_post.php">Create Post</a></li>
                <li><a href="src/auth/logout.php">Logout</a></li>
                <?php else: ?>
                <li><a href="src/auth/login.php">Login</a></li>
                <li><a href="src/auth/register.php">Register</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main>
        <?php include "templates/home.php"; ?> <!-- Dynamic content -->
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> Chronicle Blog. All rights reserved.</p>
    </footer>
</body>
</html>
