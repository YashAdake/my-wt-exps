<?php
session_start();
if(!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Secured Page</title>
</head>
<body>
    <h1>Welcome, <?php echo $_SESSION['username']; ?></h1>
    <p>This is a secured page.</p>
    <a href="logout_process.php">Logout</a>
</body>
</html>