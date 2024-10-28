<?php
session_start();

if($_SESSION['user']==""){
    echo "<script>alert('กรุณาเข้าสู่ระบบก่อนนะจ๊ะ <3'); </script>";
  echo "<meta http-equiv='refresh' content='0;URL=home.php'/>";
}

include("../config.php");

$Date = $_POST['Date'];
$Time = $_POST['Time'];
$D_Name = $_POST['D_Name'];
$C_Name = $_POST['C_Name'];
$From = $_POST['From'];
$Tu = $_POST['Tu'];
$Fee = $_POST['Fee'];
$Status_P = $_POST['Status_P'];

    $str = "insert into customer (`Date`,`Time`,D_Name,C_Name,`From`,Tu,Fee,Status_P) values ('$Date','$Time','$D_Name','$C_Name','$From','$Tu','$Fee','$Status_P')";
    $obj1 = mysqli_query($conn,$str);

    if($obj1){
        echo "<script>alert('เพิ่มข้อมูลสำเร็จ !'); </script>";
        echo "<meta http-equiv='refresh' content='0;URL=selectt.php'/>";
    }else{
        echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ โปรดลองใหม่อีกครั้ง !'); </script>";
        echo "<meta http-equiv='refresh' content='0;URL=insert.php'/>";
    }

?>