<?php
$host = "localhost";
$user_name = "root";
$password = "";
$DB_name = "database_coffeeshop";

$connection = mysqli_connect($host, $user_name, $password, $DB_name);

if (!$connection) {
    die("error in connection");
}
?>