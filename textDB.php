<!-- Create database-->
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    // Create connection
    $conn = new mysqli($servername, $username, $password);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully<br>";

    $sql = "CREATE DATABASE quanlythuvien";
    if ($conn->query($sql) === TRUE) {
      echo "Database created successfully<br>";
    } else {
      echo "Error creating database: " . $conn->error;
    }
    ?>
    <!-- Create table-->
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

    $sql = "CREATE TABLE Sach (
        MaSach INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        TenSach VARCHAR(100),
        TacGia VARCHAR(100),
        NhaXuatBan VARCHAR(100),
        NgayPhatHanh TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
    if ($conn->query($sql) === TRUE) {
        echo "Table Sach created successfully<br>";
      } else {
        echo "Error creating table: " . $conn->error;
      }
    ?>

    <?php 
        $sql = "CREATE TABLE Nguoi_muon (
        MaID INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        TenNguoiMuon VARCHAR(100),
        SoCCCD INT(10),
        SachDaMuon INT(10),
        NgayMuon TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
        NgayTra DATE
        )";
        if ($conn->query($sql) === TRUE) {
            echo "Table Nguoi_muon created successfully<br>";
        } else {
            echo "Error creating table: " . $conn->error;
        }
    ?>