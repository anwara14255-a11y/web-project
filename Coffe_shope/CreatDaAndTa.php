<?php
 
$host = "localhost";
$user = "root";
$pass = "";

 $conn = mysqli_connect($host, $user, $pass); # cheack of connect php to the database
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 $sql="CREATE DATABASE database_coffeeshop"; # انشاء قاعدة البيانات
 $retval=mysqli_query($conn, $sql);#  التنفيذ الفعلي لانشاء قاعدة البيانات
 if($retval===TRUE)
{
    echo "DataBase is Created"."<br/>";
}
 else {
    echo "Error creating DataBase:".mysqli_error($conn)."<br/>";
}

 $db=mysqli_select_db($conn, "database_coffeeshop");#اختيار قاعدة البيانات 
 $retval=mysqli_query($conn, $sql);#  التنفيذ الفعلي لانشاء قاعدة البيانات
 

 # انشاء جدول داخل قاعدة البيانات
$sql='CREATE TABLE users ('.
    'id INT AUTO_INCREMENT ,'.
    'username VARCHAR(50) NOT NULL,'.
    'password VARCHAR(255) NOT NULL,'.
    'phone VARCHAR(15) NOT NULL,'.
    'gender VARCHAR(10) NOT NULL,'.
      'primary key(id))';

$retval= mysqli_query($conn, $sql); #التنفيذ الفعلي لانشاء جدول في قاعدة البيانات 

if($retval===TRUE)
{
    echo "Table users is Created";
}
 else {
    echo "Error creating table:".mysqli_error($conn)."<br/>";
}
     

  mysqli_close($conn);
?>