<?php
session_start();
if($_SESSION['user']==""){
  echo "<script>alert('กรุณาเข้าสู่ระบบก่อนนะจ๊ะ <3'); </script>";
  echo "<meta http-equiv='refresh' content='0;URL=home.php'/>";
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>SAWASDEETRANS: Manage Car System</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  </head>

  

  <style>
    .search-bar {
      display: flex; /* ใช้ flexbox เพื่อจัดให้อยู่ในแถวเดียวกัน */
      align-items: center; /* จัดไอเท็มให้อยู่ตรงกลางตามแนวแกน Y */
    }

    .search-bar input[type="text"] {
      padding: 10px 35px 10px 15px; /* เว้นช่องให้ไอคอน */
      border: 1px solid #ced4da;
      border-radius: 5px 0px 0px 5px;
      width: 250px; /* กำหนดขนาด */
      height: 38px;
    }
  </style>

  <body>

  <?php

include("../config.php");

$strKeyword = null;
if(isset($_GET["txtKeyword"])){
  $strKeyword = $_GET["txtKeyword"];
  }

$str = "select * from customer where Date like '%$strKeyword%' ";
$obj1 = mysqli_query($conn,$str);


?>


    <div class="card text-center" style="padding: 15px">
      <h4>
        Manage car system
        <!-- <a href="../logout.php">Log out</a> -->
      </h4>
    </div>
    <br />

    <div class="container">
      <!-- <form
        name="frmSearch"
        method="get"
        action="<?php echo $_SERVER['SCRIPT_NAME']; ?>"
        style="float: right"
      > -->

      <!-- Keyword :
        <input
          name="txtKeyword"
          type="text"
          id="txtKeyword"
          value="<?php echo $strKeyword; ?>"
        /> -->

      <!-- search bar -->
      <form name="frmSearch" style="float: right" action="<?php echo $_SERVER['SCRIPT_NAME'];?>" >
        <div class="search-bar">
          <input
            name="txtKeyword"
            type="text"
            id="txtKeyword"
            placeholder="Search data"
            value="<?php echo $strKeyword;?>"
          />
          <input
            class="btn btn-outline-secondary"
            style="border-radius: 0px 5px 5px 0px"
            type="submit"
            value="Search"
            
          />
        </div>
      </form>

      <!-- insert button -->
      <h4>
        <!-- <a href="ST_insert.php" class="btn btn-primary"> Add contact </a> -->
        <a href="insert.php" class="btn btn-primary"> Insert Data </a>
        <a href="logout.php" class="btn btn-danger" onclick="return confirm('Are you sure want to Logout ?')"> Logout </a>
        
      </h4>

      <br />

      
      <!-- show data -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th>Date</th>
            <th>Time</th>
            <!-- <th><center>ประเภทของรถ</center></th> -->
            <th>Driver</th>
            <th>Customer</th>
            <!-- <th><center>เบอร์โทรลูกค้า</center></th> -->
            <th>From</th>
            <th>To</th>
            <th>Fee Charge</th>
            <th>Status</th>
            <th><center>Action</center></th>
          </tr>
        </thead>

        <tbody>
        <?php
while($result = mysqli_fetch_array($obj1)){
  ?>
    <tr>
      <td><?=$result['Date'];?></td>
      <td><?=$result['Time'];?></td>
      <td><?=$result['D_Name'];?></td>
      <td><?=$result['C_Name'];?></td>
      <td><?=$result['From'];?></td>
      <td><?=$result['Tu'];?></td>
      <td style="text-align: right; padding-right: 50px"><?=$result['Fee'];?></td>
      <td><?=$result['Status_P'];?></td>
      <td><center>
      <a          href="edit.php?edit=<?=$result['ID_CUS'];?>"
                  style="color: green"
                  onclick="return confirm('Are you sure want to edit this record ?')"
                >
                  <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
                <a
                  href="delete.php?del=<?=$result['ID_CUS'];?>"
                  style="color: red"
                  onclick="return confirm('Are you sure want to delete this record ?')"
                >
                  <i class="fa fa-trash" aria-hidden="true"></i>
                </a></center>
</td>
    </tr>
<?php
}
?>
        </tbody>
      </table>
      <br />

      <!-- <?php include("../page/sh.php");
       ?> -->
       
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  </body>
</html>
