<?php
$host = "localhost";//địa chỉ my sql sever kết nối đến
$dbname = "nguoi_dung";//tên database kết nối đến
$username = "root";//tên username để kết nối tới database
$password = "";//mật khẩu để kết nối đến database;
$conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$username,$password);
?>