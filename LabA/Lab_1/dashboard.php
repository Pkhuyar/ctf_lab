<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        h3 {text-align: center;}
    </style>
    <title>Dashboard</title>
</head>
<body>
    <header>
        <h1>Dashboard</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <main>
        <h2>Welcome, <?php echo $_SESSION['username']; ?>! You are logged in.</h2>
        <center><h3>L1_flag{Sql_injection}</h3></center>
        <!-- Your dashboard page content goes here -->
    </main>
    <footer>
        <p>&copy; 2024 Your Website</p>
    </footer>
</body>
</html>