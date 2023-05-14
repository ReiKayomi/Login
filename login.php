<?php
session_start();

if(isset($_POST['student_id']) && isset($_POST['last_name'])) {
    $student_id = $_POST['student_id'];
    $last_name = $_POST['last_name'];

    // Your login code here

    if($student_id === 'admin' && $last_name === 'admin') {
        $_SESSION['username'] = $student_id;
        header('Location: dashboard.php');
        exit();
    } else {
        $error = "Invalid student ID or last name.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="login-page">
    <div class="form">
      <form class="login-form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <?php if(isset($error)) { ?>
          <div class="error-message"><?php echo $error; ?></div>
        <?php } ?>
        <label for="student_id">Student ID</label>
        <input type="text" placeholder="Enter your student ID" name="student_id" required/>
        <label for="last_name">Last Name</label>
        <input type="password" placeholder="Enter your last name" name="last_name" required/>
        <button type="submit">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
