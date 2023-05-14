<?php
session_start();

if(!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}

$username = $_SESSION['username'];

?>

<!DOCTYPE html>
<html>
<head>
  <title>Dashboard</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="dashboard-page">
    <div class="welcome-message">Welcome, <?php echo $username; ?></div>
    <div class="logout-button"><a href="logout.php">Logout</a></div>
  </div>
</body>
</html>
