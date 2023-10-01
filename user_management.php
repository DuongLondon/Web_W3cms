<?php
//Bao ve kiem soat
session_start();
//Bao ve kiem sait ra vao
if(!$_SESSION['isLogin']){
    header("Location:Login.php");
}
?>