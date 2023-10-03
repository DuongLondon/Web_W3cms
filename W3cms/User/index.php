<?php
// Kiểm tra trạng thái đăng nhập
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location:Login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>W3cms</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap-icons-1.11.1/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../bootstrap-icons-1.11.1/bootstrap-icons.css">
    <script src="../js/bootstrap.bundle.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap.esm.js"></script>
</head>
<body>
    <div class="row">
        <div class="col-md-2">
          <img class="mt-3 mx-3" src="logo.png" alt=""><br><br>
          <div class="mx-4 text-danger">
            <div class="dropdown flex-column ">
                <!-- Nút để mở dropdown menu -->
                <i class="bi bi-person"></i>
                <button type="button" class="btn dropdown-toggle mb-2" data-toggle="dropdown">
                    User
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu dropdown-menu-top">
                    <a class="dropdown-item" href="#">Users</a>
                    <a class="dropdown-item" href="#">Group</a>
                    <a class="dropdown-item" href="#">Permissions</a>
                    
                </div>
            </div>
            <div class="dropdown">
                <!-- Nút để mở dropdown menu -->
                <i class="bi bi-box-seam"></i>
                <button type="button" class="btn dropdown-toggle mb-2" data-toggle="dropdown">
                    CMS
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu dropdown-menu-top">
                    <a class="dropdown-item" href="#">Page</a>
                    <a class="dropdown-item" href="#">Blog</a>
                    <a class="dropdown-item" href="#">Comment</a>
                    <a class="dropdown-item" href="#">Menu Setup</a>
                    <a class="dropdown-item" href="#">Subcribes</a>
                    <a class="dropdown-item" href="#">Contact Us</a>
                    
                </div>
            </div>
            <div class="dropdown">
                <!-- Nút để mở dropdown menu -->
                <i class="bi bi-gear "></i>
                <button type="button" class="btn dropdown-toggle mb-2" data-toggle="dropdown">
                    Config
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu dropdown-menu-top">
                    <a class="dropdown-item" href="#">Site</a>
                    <a class="dropdown-item" href="#">Reading</a>
                    <a class="dropdown-item" href="#">Social</a>
                    
                </div>
            </div>
            <div class="dropdown">
                <!-- Nút để mở dropdown menu -->
                <i class="bi bi-grid "></i>
                <button type="button" class="btn dropdown-toggle mb-2" data-toggle="dropdown">
                    Dashboard
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu dropdown-menu-top">
                    <a class="dropdown-item" href="#">Dashboard Light</a>
                    <a class="dropdown-item" href="#">Dashboard Dark</a>
                    <a class="dropdown-item" href="#">Schedule</a>
                    
                </div>
            </div>
            <div class="dropdown">
                <!-- Nút để mở dropdown menu -->
                <i class="bi bi-book "></i>
                <button type="button" class="btn dropdown-toggle mb-2" data-toggle="dropdown">
                    Courses
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu dropdown-menu-top">
                    <a class="dropdown-item" href="#">Courses</a>
                    <a class="dropdown-item" href="#">Detail</a>
                    <a class="dropdown-item" href="#">Detail</a>
                    
                </div>
            </div>
            <div class="dropdown">
                <!-- Nút để mở dropdown menu -->
                <i class="bi bi-people "></i>
                <button type="button" class="btn dropdown-toggle mb-2" data-toggle="dropdown">
                    Instructor
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu dropdown-menu-top">
                    <a class="dropdown-item" href="#">Dashboard</a>
                    <a class="dropdown-item" href="#">Courses</a>
                    <a class="dropdown-item" href="#">Schedule</a>
                    
                </div>
            </div>
            <div class="dropdown">
                <!-- Nút để mở dropdown menu -->
                <i class="bi bi-info-circle "></i>
                <button type="button" class="btn dropdown-toggle mb-2" data-toggle="dropdown">
                    Apps
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu dropdown-menu-top">
                    <a class="dropdown-item" href="#">Profile</a>
                    <a class="dropdown-item" href="#">Post Detail</a>
                    <a class="dropdown-item" href="#">Email</a>
                    
                </div>
            </div>
            <div class="dropdown">
                <!-- Nút để mở dropdown menu -->
                <i class="bi bi-pie-chart "></i>
                <button type="button" class="btn dropdown-toggle mb-2" data-toggle="dropdown">
                    Charts
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu dropdown-menu-bottom">
                    <a class="dropdown-item" href="#">Flot</a>
                    <a class="dropdown-item" href="#">Morris</a>
                    <a class="dropdown-item" href="#">Peity</a>
                    
                </div>
            </div>
            <div class="dropdown ">
                <!-- Nút để mở dropdown menu -->
                <i class="bi bi-star "></i>
                <button type="button" class="btn dropdown-toggle mb-2" data-toggle="dropdown">
                    Bootstrap
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu dropdown-menu-top">
                    <a class="dropdown-item" href="#">Select</a>
                    <a class="dropdown-item" href="#">Toastr</a>
                    <a class="dropdown-item" href="#">Jqv Map</a>
                    
                </div>
            </div>
            <div class="dropdown ">
                <!-- Nút để mở dropdown menu -->
                <i class="bi bi-heart "></i>
                <button type="button" class="btn dropdown-toggle mb-2" data-toggle="dropdown">
                    Plugins
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu dropdown-menu-top">
                    <a class="dropdown-item" href="#">Drop</a>
                    <a class="dropdown-item" href="#">Up</a>
                    <a class="dropdown-item" href="#">Awesome</a>
                    
                </div>
            </div>
            <div class="dropdown ">
                <!-- Nút để mở dropdown menu -->
                <i class="bi bi-gear-wide "></i>
                <button type="button" class="btn mb-2" >
                    Widgets
                </button>
            </div>
            <div class="dropdown ">
                <!-- Nút để mở dropdown menu -->
                <i class="bi bi-file-earmark-check "></i>
                <button type="button" class="btn dropdown-toggle mb-2" data-toggle="dropdown">
                    Form
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu dropdown-menu-top">
                    <a class="dropdown-item" href="#">Mục 1</a>
                    <a class="dropdown-item" href="#">Mục 2</a>
                    <a class="dropdown-item" href="#">Mục 3</a>
                    
                </div>
            </div>
            <div class="dropdown ">
                <!-- Nút để mở dropdown menu -->
                <i class="bi bi-file-earmark-spreadsheet "></i>
                <button type="button" class="btn dropdown-toggle mb-2" data-toggle="dropdown">
                    Table
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu dropdown-menu-top">
                    <a class="dropdown-item" href="#">Mục 1</a>
                    <a class="dropdown-item" href="#">Mục 2</a>
                    <a class="dropdown-item" href="#">Mục 3</a>
                    
                </div>
            </div>
            <div class="dropdown ">
                <!-- Nút để mở dropdown menu -->
                <i class="bi bi-file-earmark-break "></i>
                <button type="button" class="btn dropdown-toggle mb-2" data-toggle="dropdown">
                    Pages
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu dropdown-menu-top">
                    <a class="dropdown-item" href="#">Mục 1</a>
                    <a class="dropdown-item" href="#">Mục 2</a>
                    <a class="dropdown-item" href="#">Mục 3</a>
                    
                </div>
            </div>
          </div>
        </div>
        <div class="col-md-10 bg-light  ">
          <div class="d-flex">
            <i class="bi bi-list mt-2 p-3" style="font-size: larger;"></i>
            <div class="col-8 p-3">
              <h2>Dashboard</h2>
            </div>  
            <div class="col-4 p-3 ms-4 ">
              <i class="bi bi-search"></i>
              <input type="text" name="" id="" placeholder="Search here...">   
            </div>        
          </div>
          <div class="row">
            <div class="col-6 ">
              <img src="pic1.png" alt="" class="img-fluid" style="height: 300px; width:470px">
            </div>
            <div class="col-5 ms-4 ">
              <img  src="pic2.png" alt="" class="img-fluid" style="height: 300px; width:470px">
            </div>
          </div>
            <a href="add_user.php" target="_blank">
            <!-- Đây là nút (button) -->
            <button class="btn btn-success mt-3" type="button"><i class="bi bi-person-add"></i> Add User</button>
          </a>
          <?php
            // Truy vấn dữ liệu từ cơ sở dữ liệu
            require_once 'connection.php';
            $sql  = ('SELECT id, ten, gioi_tinh, nam_sinh,email,pass FROM user ORDER BY id ');
        $stmt = $conn->prepare("$sql");//ORDER BY ASC : DỮ LIỆU GIẢM DẦN; ORDER BY DESC : DỮ LIỆU TĂNG D
        $stmt->execute();
        $row = $stmt->fetchAll();
            //$pass_hash = password_hash($pass,PASSWORD DEFAULT);
          $kq = $conn->query($sql);//$kq là đối tượng dữ liệu, chứa các dòng dữ liệu đổ về từ mysql
          $sodong = $kq->rowCount();//lấy ra số dòng
          if(isset($_GET['response'])){
            echo "<p>{$_GET['response']}</p>";
          }
          if ($sodong > 0) {
              // Hiển thị dữ liệu trong bảng
              echo "<table class='table my-3'>";
              echo "<thead>";
                  echo "<tr>";
                  echo"<th scope='col'>id</th>";
                  echo"<th scope='col'>Tên</th>";
                  echo"<th scope='col'>Giới tính</th>";
                  echo"<th scope='col'>Năm sinh</th>";
                  echo"<th scope='col'>Chi tiết</th>";
                  echo"<th scope='col'>Edit</th>";
                  echo"<th scope='col'>Email</th>";
                  echo"<th scope='col'>Password</th>";
                  echo"</tr>";
            "</thead>";
              foreach ($row as $row) {//Lấy dữ diệu dưới dạng mảng kêt hợp
                  echo"<tbody>";
                    echo"<tr>";
                      echo"<td>".$row['id']."</td>";
                      echo"<td>".$row['ten']."</td>";
                      echo"<td>".$row['gioi_tinh']."</td>";
                      echo"<td>".$row['nam_sinh']."</td>";
                      echo"<td><a href='detail.php?id=$row[id]'><i class='bi bi-eye'></i></a></td>";
                      echo"<td>";
                      echo"<td>".$row['email'];
                      echo"<td>".$row['pass'];
              }
              echo "</table>";
          } else {
              echo "Không có dữ liệu";
          }
          ?>
        </div>
    </div> 
</body>
</html>