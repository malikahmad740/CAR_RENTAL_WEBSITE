<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $pass=password_hash($_POST['password'], PASSWORD_DEFAULT);

  mysqli_query($conn,"INSERT INTO users VALUES(NULL,'$name','$email','$pass')");
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Signup</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="auth-box">
<h2>Create Account</h2>
<form method="POST">
<input type="text" name="name" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button class="btn full">Sign Up</button>
</form>
<p>Already have an account? <a href="login.php">Login</a></p>
</div>

</body>
</html>
