<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){
  $email=$_POST['email'];
  $pass=$_POST['password'];

  $res=mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
  $user=mysqli_fetch_assoc($res);

  if($user && password_verify($pass,$user['password'])){
    $_SESSION['email']=$email;
    header("Location: index.php");
  } else {
    $error="Invalid credentials";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="auth-box">
<h2>Welcome Back</h2>
<form method="POST">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button class="btn full">Login</button>
</form>
<?php if(isset($error)) echo "<p>$error</p>"; ?>
<p>No account? <a href="signup.php">Signup</a></p>
</div>

</body>
</html>
