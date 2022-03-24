<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Label -->
    <form method="post">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="InputSignUpEmail">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="InputSignUpPassword">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
    <button type="reset" class="btn btn-primary" value="Reset">Reset</button>
    </form>
<!-- Label -->
<!-- Insert user -->
<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quanlythuvien";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST['InputSignUpEmail'];
        $password = $_POST['InputSignUpPassword'];
        if(empty($name)===true) {
            echo "NGU";
        }else {
            // Xem co ton tai hay khong
            $sql = "SELECT * FROM quantri";
            $result = $conn->query($sql);
            $checkExist = false;

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    if($row["TaiKhoan"]===$name) {
                        echo "Tai khoan da ton tai";
                        $checkExist=true;
                        break;
                    }
                }
            } else {
                echo "0 results";
            }
            if($checkExist===false) {
                $sql = "INSERT INTO quantri (TaiKhoan, MatKhau)
                VALUES ('$name','$password')";
                
                if ($conn->query($sql) === TRUE) {
                echo "Dang ky thanh cong";
                header("Location: http://localhost/index.php");
                } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
        }
      }
?>
<!-- inSERT User -->
</body>
</html>