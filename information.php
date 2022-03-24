<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style="">THÔNG TIN ĐẶT CHỖ</p>
    <p>Họ và tên: 
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $name = $_POST['nameCustomer'];
                if (empty($name)) {
                    echo "Name is empty";
                } else {
                    echo $name;
                }
            }else {echo "TAI SAO";}
        ?>
        <br>
    </p>
    <p>Độ tuổi: 
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['age'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }else {echo "TAI SAO";}
    ?>
    / Giới tính:
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['sex'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }else {echo "TAI SAO";}
    ?>
    <br></p>
    <p>Địa chỉ:
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $name = $_POST['address'];
                if (empty($name)) {
                    echo "Name is empty";
                } else {
                    echo $name;
                }
            }else {echo "TAI SAO";}
        ?>
    <br></p>
    <h3>Thông tin đặt chỗ</h3>
    <p>Số khách tham dự bữa tiệc
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name = $_POST['numberCustomer'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
        }
    ?>
    - Ngày đặt tiệc: 
    <?php 
        // collect value of input field
        $name = $_POST['date'];
        if (empty($name)) {
            echo "Name is empty";
        } else {
            echo $name;
        }
    ?>
    </p>
    <p>Loại tiệc:
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['categoriesParty'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }else {echo "TAI SAO";}
    ?>
    </p>
    <br>
    <p>Địa điểm:
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['addressParty'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }else {echo "TAI SAO";}
    ?>
    </p>
    <p>Các yêu cầu kèm theo:
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['message'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }else {echo "TAI SAO";}
    ?>
    </p>
    <p>Quý khách biết chúng tôi qua:
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $name = $_POST['knowTo'];
                if (empty($name)) {
                    echo "Name is empty";
                } else {
                    echo $name;
                }
            }else {echo "TAI SAO";}
        ?>
    </p>
    <p>Chúng tôi đã nhận được thông tin đặt chỗ của quý khách vào lúc: 
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // collect value of input field
            $name = $_POST['date'];
            if (empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }else {echo "TAI SAO";}
    ?>
    </p>
</body>
</html>