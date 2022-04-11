<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="SignUp.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@500&family=Open+Sans&family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<!-- Label -->
    <form method="post">
    <div class="mb-3">
        <h2>Sign Up</h2>
        <p id ="email">
            <label for="exampleInputEmail1" class="form-label">Email address: </label>
            <input type="email" class="form-control-email" id="exampleInputEmail1" aria-describedby="emailHelp" name="InputSignUpEmail">
        </p>
    
        <p id="password">
            <label for="exampleInputPassword1" class="form-label">Password: </label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="InputSignUpPassword"><br>
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </p>
    
        <p id = "checkBox">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label><br>
        </p>
            <button class = "btnSignIn" type="submit" class="btn btn-primary">Sign in</button>
            &emsp;&emsp;
            <button class = "btnReset" type="reset" class="btn btn-primary" value="Reset">Reset</button>   
    </div>
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
            echo "<p style='color: red; text-align: center;'>Sai tai khoan hoac mat khau</p>";
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
                header("Location: http://localhost/Web-Librian/index.php");
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