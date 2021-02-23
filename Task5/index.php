<html>
<head>
    <title>demo PDO</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
 <?php
// Kết nối đến server
 $host = "localhost";
 $user = "root";
 $password = "";
 $database = "Starbucks";
 $connect = mysqli_connect($host,$user,$password);

 if (mysqli_connect_error())
 {
     echo  "connection fail".mysqli_connect_error();
 }
 else
 {
     echo "Đã kết nối database thành công <br>";
 }


 //tạo database Starbucks
 $tao_db= "CREATE DATABASE Starbucks";

 if ($connect->query($tao_db) === TRUE)
 {
    echo "tạo database Starbucks thành công <br>";
 }
 else
 {
     echo "Fail creat database".$connect->error;
 }


 //tạo bảng sản phẩm menu
 $connect1 = mysqli_connect($host,$user,$password,$database);
 $tao_menu = "CREATE TABLE menu(
        ID INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        NAME varchar(80),
        PRICE int(6),
        IMAGE varchar(200))";

 if ($connect1->query($tao_menu) === TRUE)
 {
     echo "Tạo menu thành công";
 }
 else
 {
     echo "ko tạo đk bảng".$connect1->error;
 }


 //Thêm thông tin vào bảng
 $connect1 = mysqli_connect($host,$user,$password,$database);
 $insert= "INSERT INTO `menu` (`ID`, `NAME`, `PRICE`, `IMAGE`) VALUES
(1, 'Asian Dolce Frappuccino® Blended Beverage', 50000, '<img src=\"https://www.starbucks.vn/media/mocha-blanco-frappuccino-blended_tcm90-18629_w1024_n.png\">'),
(2, 'Frappuccino®', 50000, '<img src=\"https://www.starbucks.vn/media/drinks-cafe-frappuccino_tcm90-10996_w1024_n.jpg\">'),
(3, 'Thức uống với Cà phê Xay Nhẹ Frappuccino®', 45000, '<img src=\"https://www.starbucks.vn/media/Caramel-Light-Frappuccino-Blended-Coffee_tcm90-3749_w1024_n.jpg\">')";
 if ($connect1->query($insert) === TRUE)
 {
     echo "Insert thành công";
 }
 else
 {
     echo "insert fail".$connect1->error;
 }



 //In ra
 ?>
 <style>
     table , th , td {
         border: 1px solid black;
     }
 </style>
<div id="menu">
    <h1>Menu off starbucks</h1>
    <table id="menu-list" style="width: 700px;">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>PRICE</td>
            <td>IMAGE</td>
        </tr>

        <?php
        $result = mysqli_query($connect1, "SELECT * FROM menu");
        while ($row = mysqli_fetch_array($result)){
        ?>
        <tr>
            <td><?= $row['ID']?></td>
            <td><?= $row['NAME']?></td>
            <td><?= $row['PRICE']?></td>
            <td><?= $row['IMAGE']?></td>
        </tr>
        <?php } ?>
    </table>
</div>





</body>
</html>