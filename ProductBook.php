<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProductBook</title>
    <link rel="stylesheet" href="ProductBook.css">
</head>
<body>
<div class="header">
  <h1>THƯ VIỆN SÁCH</h1>
</div>
<div class="topnav">
  <a href="HomePage.php">Trang chủ</a>
  <a href="ProductBook.php">Sách</a>
  <a href="Post.php">Post</a>
  <a href="Logout.php" style="float: inline-end;">Log Out</a>
  <a href="Cart.php" style="float: inline-end;">Giỏ sách</a>
  <a href="Profile.php" style="float: inline-end;">Thông tin cá nhân</a>
</div>
<div style="margin-top: 50px;">
<!-- Tranning Insert Book :"3 -->
    <table>
        <tr>
            <th>Mã sách</th>
            <th>Tên sách</th>
            <th>Tac giả</th>
            <th>Nhà xuất bản</th>
            <th>Ngày phát hành</th>
        </tr>
        <tr>
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
                $sql = "SELECT * FROM sach";
                $result = $conn->query($sql);
                
                if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["MaSach"] . "</td>";
                    echo "<td>" . $row["TenSach"] . "</td>";
                    echo "<td>" . $row["TacGia"] . "</td>";
                    echo "<td>" . $row["NhaXuatBan"] . "</td>";
                    echo "<td>" . $row["NgayPhatHanh"] . "</td>";
                    echo "</tr>";
                }
                } else {
                echo "0 results";
                }
                $conn->close();
            ?>
        </tr>
    </table>
</div>
</body>
</html>