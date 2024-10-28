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
$editID = $_POST['editID'];

    $str = "update customer set Date = '$Date',
                                Time = '$Time',
                                D_Name = '$D_Name',
                                C_Name = '$C_Name',
                                `From` = '$From',
                                Tu = '$Tu',
                                Fee = '$Fee',
                                Status_P = '$Status_P'
                                where ID_CUS = '$editID'";
    $obj1 = mysqli_query($conn,$str);

    if($obj1){
        echo "<script>alert('แก้ไขข้อมูลสำเร็จ !'); </script>";
        echo "<meta http-equiv='refresh' content='0;URL=selectt.php'/>";
    }else{
        echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ โปรดลองใหม่อีกครั้ง !'); </script>";
        echo "<meta http-equiv='refresh' content='0;URL=selectt.php'/>";
    }

?>