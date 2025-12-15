<?php
 session_start();
include "connect.php";

       
if(isset($_POST['signup'])){

    $username = $_POST['username'];
   $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $phone    = $_POST['phone'];
    $gender   = $_POST['gender'];

    $sql = "INSERT INTO users (username, password, phone, gender)
            VALUES ('$username', '$password', '$phone', '$gender')";

  if(mysqli_query($connection, $sql)){
    header("Location: login.php");
    exit();
} else {
    echo "Error";
}

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Sign Up</title>
</head>
<body>

<h2>Sign Up</h2>

<form method="post">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="tel" name="phone" placeholder="Phone" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>

    <input type="radio" name="gender" value="male" required> Male
    <input type="radio" name="gender" value="female"> Female<br><br>

    <input type="submit" name="signup" value="Sign Up">
</form>

<a href="login.php">Already have account?</a>

</body>
</html>

