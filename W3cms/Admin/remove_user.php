<?php
    //lay du lieu id can xoa
    $sid = $_GET['id'];
    //echo $sid;
    //ketnoi
    require_once 'connection.php';
    //caulenhsql
    $xoa_sql = "DELETE FROM user WHERE id=$sid";
    $stmt=$conn->prepare($xoa_sql);
    $stmt->execute();

    $result = $conn->query($xoa_sql); 
    $response = "Deleted id $sid";
    $row = $stmt->fetchAll();
    foreach($row as $row){
        $row['ten'];
        $row['gioi_tinh'];
        $row['nam_sinh'];
    }
    if($result){
    header("Location:adminHome.php?response=$response");
    }
?>