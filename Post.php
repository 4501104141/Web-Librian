<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="index.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">

  <!-- Connect DB -->
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
  ?>
<!-- Connect DB -->

</head>
<body style="text-align: center; margin-top: 300px;">
<div>
  <form method="POST">
    <label for="fname">Địa chỉ email</label>
    <input type="email" id="exampleInputEmail1" name="InputEmail" placeholder="Email..">
    <label for="lname">Mật Khẩu</label>
    <input type="password" id="exampleInputPassword1" name="OutputPassword" placeholder="Password..">
    <input type="submit" value="Đăng nhập">
    <input type="reset" value="Làm mới">    
  </form>

</div>
<!--Sign up-->
<div>
    <form>
        <button type="submit" style="margin-top: 15px;" formaction="http://localhost/Web-Librian/SignUp.php">Đăng kí</button>
    </form>
</div>
<!--Sign up-->
<!-- Check account -->
<?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sql = "SELECT * FROM quantri";
    $result = $conn->query($sql);
    // collect value of input field
    $name = $_POST['InputEmail'];
    $password = $_POST['OutputPassword'];
    $checkLogin = false;
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
         if ($name===$row["TaiKhoan"] && $password === $row["MatKhau"]) {
          echo "Dang nhap thanh cong";
          $checkLogin=true;
          header("Location: http://localhost/Web-Librian/HomePage.php");
          break;
        }
      }
    }
    if($checkLogin===false) {echo "<p style='color: white;'>Sai tai khoan hoac mat khau</p>";}
  }
  $conn->close();
?>
<!-- Check account -->
  <script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</body>
</html>