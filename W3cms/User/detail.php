<?php
    $host = "localhost";//địa chỉ my sql sever kết nối đến
    $dbname = "nguoi_dung";//tên database kết nối đến
    $username = "root";//tên username để kết nối tới database
    $password = "";//mật khẩu để kết nối đến database;
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$username,$password);
    $pid = $_GET['id'];
    //echo mysqli_error($conn);
    //ketnoi
    require_once 'connection.php';
    //lay thong tin ve user có id = $id
    $edit_sql = "SELECT * FROM user WHERE id=$pid";
    $stmt = $conn->prepare($edit_sql);
    $result=$conn->query($edit_sql);
    $row = $result->fetchAll();
    foreach($row as $row){
        $row['ten'];
        $row['gioi_tinh'];
        $row['nam_sinh'];
    }

    //hien thi thong tin len form
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <h1>Details</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="pid" value="<?php echo $pid?>"id="">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Tên</label>
                <input type="text" class="form-control"name="ten" value="<?php echo $row['ten']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Giới tính</label>
                <input type="text" class="form-control" name="gioi_tinh" value="<?php echo $row['gioi_tinh']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Năm sinh</label>
                <input type="text" class="form-control" name="nam_sinh" value="<?php echo $row['nam_sinh']?>">
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
