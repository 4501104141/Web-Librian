<!DOCTYPE html>
<html lang = "en">
<head>
<title>Page Title</title>
</head>
<body>
<!--
    connect DB
-->
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, "quanlythuvien");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
<!--
    connect DB
-->
<h1>This is a Heading</h1>
<p>This is a paragraph.</p>

</body>
</html>