<?php   
$email = $_POST['email'];

require_once 'connection.php';

$sql = "SELECT email FROM user WHERE email = '$email'";

$stmt = $conn ->prepare($sql);
$result = $conn->query($sql);

$response = 'Email không tồn tại';

if($result->rowCount()>0){
    header("Location:resetPass.php");
}else{
    header("Location:forgotPass.php?response=$response");
}