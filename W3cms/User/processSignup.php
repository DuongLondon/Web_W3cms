<?php
$email = $_POST['email'];
$ten = $_POST['ten'];
$gt = $_POST['gioi_tinh'];
$ns = $_POST['nam_sinh'];
$pass = $_POST['pass'];

require_once 'connection.php';

$checkSql = "SELECT count(*) FROM user WHERE email='$email' AND ten='$ten' AND gioi_tinh='$gt' AND nam_sinh='$ns' AND pass='$pass'";
$stmt2 = $conn->prepare($checkSql);
try {
    $stmt2->execute();
} catch (PDOException $e) {
    echo 'Đã có lỗi xảy ra: ' . $e->getMessage();
    exit;
}
$count = $stmt2->fetchColumn();
if ($count > 0) {
    echo "Tài khoản đã tồn tại";
    header("Location: Signup.php?response=$response");
    header('Location: Signup.php');
    exit;
}

$sql = "INSERT INTO user (email, ten, gioi_tinh, nam_sinh, pass) VALUES ('$email', '$ten', '$gt', '$ns', '$pass')";
$response = "Tài khoản đã tồn tại";
$stmt = $conn->prepare($sql);
try {
    $stmt->execute();

    // Gửi email xác nhận và thông báo thành công
    // ...

    header('Location: Login.php');
    exit;
} catch (PDOException $e) {
    echo 'Đã có lỗi xảy ra: ' . $e->getMessage();
    exit;
}
