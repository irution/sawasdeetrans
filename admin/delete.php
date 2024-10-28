<?php
session_start();

if($_SESSION['user']==""){
    echo "<script>alert('กรุณาเข้าสู่ระบบก่อนนะจ๊ะ <3'); </script>";
    echo "<meta http-equiv='refresh' content='0;URL=home.php'/>";
  }


$del1 = $_GET['del'];

include("../config.php");

$str = "delete from customer where ID_CUS = '$del1' ";
$obj = mysqli_query($conn,$str);

    if($obj){
        echo "<script>alert('ลบข้อมูลสำเร็จ !'); </script>";
        echo "<meta http-equiv='refresh' content='0;URL=selectt.php'/>";
    }else{
        echo "<script>alert('ลบข้อมูลไม่สำเร็จ โปรดลองใหม่อีกครั้ง !'); </script>";
        echo "<meta http-equiv='refresh' content='0;URL=selectt.php'/>";
    }


?>

?>