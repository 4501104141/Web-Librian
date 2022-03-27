<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
</head>
<body>
  <form action="/information.php <?php echo $_SERVER['PHP_SELF'];?>" method="post" onsubmit="onClickSubmit(event)">
    <h1>THÔNG TIN ĐẶT CHỖ</h1>

    <label>Số khách tham dự buổi tiệc của quý khách:</label>
    <input type="text" id="numberCustomer11" name="numberCustomer" value="100" required>
    <label>Ngày</label>
    <input type="datetime-local" id="" name="date" value="Doe" required><br>

    <label>Loại tiệc:</label>
    <input type="radio" id="vehicle1" name="categoriesParty" value="Tiệc sáng">
    <label for="vehicle1">Tiệc sáng</label>
    <input type="radio" id="vehicle2" name="categoriesParty" value="Tiệc trưa">
    <label for="vehicle2">Tiệc trưa</label>
    <input type="radio" id="vehicle3" name="categoriesParty" value="Tiệc tối">
    <label for="vehicle3">Tiệc tối</label><br>

    <label>Địa điểm: </label>
    <!-- Radio button is not only ==> Fix them-->
      <input type="radio" id="inSide1" name="addressParty" value="Trong Nhà">
      <label for="inSide1">Trong nhà</label>
      <input type="radio" id="outSide1" name="addressParty" value="Ngoài trời">
      <label for="outSide1">Ngoài trời</label><br>
    
    <label>Tên quý khách:</label>
    <input type="text" id="nameCustomer" name="nameCustomer" value="Nguyễn Duy Phương" required>
    <label>Địa chỉ liên lạc </label>
    <input type="text" id="address" name="address" value="123 Sư vạn hạnh" required>
    <br>

    <label>Độ tuổi</label>
    <select name="age" id="age" required>
      <option value="19-34">Từ 19 đến 34</option>
      <option value="34-50">Từ 34 đến 50</option>
      <option value="50-60">Từ 50 đến 60</option>
      <option value="60more">60 trở lên</option>
    </select>
    <br><br>

    <label>Giới tính</label>
    <input type="radio" id="male" name="sex" value="Nam">
    <label for="male">Nam</label>
    <input type="radio" id="female" name="sex" value="Nữ">
    <label for="female">Nữ</label><br>

    <label>Quý khách biết đến công ty chúng tôi qua</label>
    <select id="knowTo" name="knowTo" size="3" multiple required>
      <option value="Báo chí">Báo chí</option>
      <option value="Đài phát thanh">Đài phát thanh</option>
      <option value="Tivi">Tivi</option>
    </select><br><br>

    <label>Các yêu cầu khác của quý khách</label>
    <textarea name="message" rows="3" cols="50">
    </textarea>


    <button type="submit" id="btn1">Đặt chỗ</button>
    <script type="text/javascript">
        const soKhach = document.querySelector("#numberCustomer11")
        function onClickSubmit(event){
          event.preventDefault();
          const valueSoKhach = soKhach.value;
          valueSoKhach==="" && alert("ko duoc")
        }
    </script>
    </fieldset>
  </form>
  
<script src="bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</body>
</html>