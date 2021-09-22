<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh bạ điện tử - Trường Đại học Thủy lợi</title>
</head>
<body>
    <h1>Danh bạ các Đơn vị tại trường ĐHTL</h1>

    <?php
        //Tôi muốn hiển thị Danh bạ các Đơn vị:
        //Quy trình 4 bước:
        //Bước 01: Kết nối vào CSDL:
        $conn = mysqli_connect('localhost','root','','dhtl_danhba','3306');
        if(!$conn){
            echo "Kết nối không thành công";
        }

        //Bước 02: Liên quan đến môn CSDL: định nghĩa câu truy vấn
        $sql = "SELECT * FROM db_donvi";
        $result = mysqli_query($conn,$sql);

        echo "<table border='1'>";
        echo "<tr><th>Mã đơn vị</th><th>Tên đơn vị</th><th>Email</th><th>Địa chỉ</th><th>Website</th><th>Điện thoại</th></tr>";
        //Bước 03: Nó trả về tập rỗng hoặc tập kết quả (nhiều bản ghi)
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";
                echo "<td>".$row['madv'].'</td>';
                echo "<td>".$row['tendv'].'</td>';
                echo "<td>".$row['email'].'</td>';
                echo "<td>".$row['diachi'].'</td>';
                echo "<td>".$row['website'].'</td>';
                echo "<td>".$row['dienthoai'].'</td>';
            echo "</tr>";

        }

        echo "</table>";
        // Đóng kết nối
        mysqli_close($conn);
    ?>
</body>
</html>