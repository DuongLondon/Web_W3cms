<?php
//nhan du lieu tu form
$t = $_POST['ten'];
$gioi_tinh = $_POST['gioi_tinh'];
$nam_sinh = $_POST['nam_sinh'];
$id = $_POST['pid'];
//ket noi csdl
require_once 'connection.php';

//viet lenh sql de them du lieu
$updatesql = "UPDATE user SET ten='$t',gioi_tinh='$gioi_tinh',nam_sinh='$nam_sinh' WHERE id=$id";
$stmt = $conn->prepare($updatesql);
$stmt->execute();
//thuc thi cau lenh
if($result){
    header("Location:index.php");
}

    
?>