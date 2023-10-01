<?php
try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8",$username,$password);
}catch(PDOException $e){
    echo 'Lỗi kết nối'.$e->getMessage();
    echo "Thông tin lỗi".var_export($conn->errorInfo(),true);
}  
    $pid = $_GET['id'];
    
    //ketnoi
    require_once 'connection.php';
    //lay thong tin ve user có id = $id
    $detail_sql = 'SELECT * FROM user WHERE id=$pid';
    $stmt = $conn->prepare($detail_sql);
    $result=$conn->query($detail_sql);
    $row = $stmt->fetchAll();
    foreach($row as $row){
        $row['ten'];
        $row['dioi_tinh'];
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <h1>Details</h1>
        <form action="update.php" method="post">
            <input type="hidden" name="pid" value="<?php echo $pid?>"id="">
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Tên</label>
                <input type="text" class="form-control" name="ten" value="<?php echo $row['ten']?>">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" class="form-label">Giới tính</label>
                <input type="text" class="form-control" name="gioi_tinh" value="<?php echo $row['gioi_tinh']?>" >
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