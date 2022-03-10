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
echo "Connected successfully<br>";
?>
<?php
    $sql = "SELECT * FROM quantri";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["TaiKhoan"]. " - Name: " . $row["MatKhau"]. "<br>";
      }
    } else {
      echo "0 results";
    }
?>
<?php
$sql = "INSERT INTO quantri (TaiKhoan,MatKhau)
VALUES ('admin@gmail.com','123')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>