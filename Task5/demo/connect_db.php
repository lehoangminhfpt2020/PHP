<!--\\ đây là file để kết nối với cơ sở dữ liệu trên server mà chúng ta tạo trước đó có tên là demo\\-->
<!--\\ nếu có lỗi và không kết nối được thì sẽ bào lỗi còn ok thì hiện thị chữ success\\-->
<br>
<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "demo";
$connect = mysqli_connect($host,$user,$password,$database);
if (mysqli_connect_error())
{
    echo  "connection fail".mysqli_connect_error();
}
else
    {
        echo " connect success!";
    }
?>