<?php 
session_start();
$email = $_POST['email'];
$pass  = $_POST['pass'];
require_once 'connection.php';
try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$username,$password);
}catch(PDOException $e){
    echo 'Lỗi kết nối'.$e->getMessage();
    echo "Thông tin lỗi".var_export($conn->errorInfo(),true);
}  
$tim_sql = "SELECT * FROM user WHERE email = '$email' AND pass = '$pass'";
$stmt = $conn->prepare($tim_sql);
$result = $conn->query($tim_sql);
$response = "Tài khoản không tồn tại";
if($result->rowCount()>0){
    $_SESSION['logged_in'] = true;
    header("Location:index.php");
    
}else{
    header("Location:User/Login.php?response=$response");
}
// Sau khi xác thực thành công

    
?>