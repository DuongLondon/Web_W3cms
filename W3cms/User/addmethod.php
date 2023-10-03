<?php
//nhan du lieu tu form
$t = $_POST['ten'];
$gioi_tinh = $_POST['gioi_tinh'];
$nam_sinh = $_POST['nam_sinh'];
$email = $_POST['email'];
$pass = $_POST['pass'];
//ket noi csdl
require_once 'connection.php';
try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$username,$password);
}catch(PDOException $e){
    echo 'Lỗi kết nối'.$e->getMessage();
    echo "Thông tin lỗi".var_export($conn->errorInfo(),true);
}  
//viet lenh sql de them du lieu
$themsql = "INSERT INTO user(ten,gioi_tinh,nam_sinh,email,pass) VALUES('$t','$gioi_tinh','$nam_sinh','$email','$pass')";
$stmt = $conn->prepare($themsql);
$result = $conn->query($themsql);

//echo $themsql;  exit;
//thuc thi cau lenh;
$row = $result->fetch();
foreach($row as $row){
    $row['ten'];
    $row['gioi_tinh'];
    $row['nam_sinh'];
    $row['email'];
    $row['pass'];
}
if($result){
    header("Location:index.php");
}
?>