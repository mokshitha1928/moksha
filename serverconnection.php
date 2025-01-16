<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jain";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
$USER=$_POST['tb1'];
$PASS=$_POST['tb2'];
$EMAIL=$_POST['tb3'];
$PHONE_NUMBER=$_POST['tb4'];
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO college(username,pass,email,phonenumber)
VALUES ('$USER' ,'$PASS', '$EMAIL' , '$PHONE_NUMBER')";

if ($conn->query($sql) === TRUE) 
{
  echo "new record created successfully";
} 
 else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>