<?php
session_start();
include "connect.php";


if(isset($_POST['login'])){

    $username = $_POST['username'];
  $password = $_POST['password'];

   $sql = "SELECT * FROM users WHERE username='$username'";

    $result = mysqli_query($connection, $sql);

  if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);

    if(password_verify($password, $row['password'])){
        $_SESSION['user'] = $username;
        header("Location: homePage.php");
        exit();
    } else {
        echo "Wrong username or password ❌";
    }
}
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="post">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <input type="submit" name="login" value="Login">
</form>

<a href="signup.php">Create new account</a>

</body>
</html>
