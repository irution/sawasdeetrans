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
  <title>Manage car system: Insert Data</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<style>
    .container {
            width: 50%;
            margin: auto;
            padding-bottom: 60px; /* เพิ่มพื้นที่ว่างด้านล่าง */
        }
</style>

<body>



  <div class="card text-center" style="padding:15px;">
    <h4>Manage car system: Insert Data</h4>
  </div><br>

  <div class="container">
    <div>
     <form action="insert-p.php" method="post" enctype="multipart/form-data">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="date">Date:</label>
            <input type="date" class="form-control" name="Date" placeholder="mm/dd/yyyy" onfocus="(this.type='date')" onblur="(this.type='text')" required="">
          </div>
          <div class="form-group col-md-6">
            <label for="time">Time:</label>
            <input type="time" class="form-control" name="Time" placeholder="Enter time" required="">
          </div>
        </div>
        <div class="form-group">
          <label for="driver">Driver:</label>
          <input type="text" class="form-control" name="D_Name" placeholder="Enter driver name " required="">
        </div>
        <div class="form-group">
          <label for="customer">Customer:</label>
          <input type="text" class="form-control" name="C_Name" placeholder="Enter customer name " required="">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="place">From:</label>
            <input type="text" class="form-control" name="From" placeholder="Enter location" required="">
          </div>
          <div class="form-group col-md-6">
            <label for="place">To:</label>
            <input type="text" class="form-control" name="Tu" placeholder="Enter location" required="">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="price">Fee Change:</label>
            <input type="text" class="form-control" name="Fee" placeholder="Enter fee Change" required=""/>
          </div>
          <div class="form-group col-md-6">
            <label for="status">Status:</label>
            <select name="Status_P" class="custom-select" id="status">
              <option value="None">None</option>
              <option value="Pending Payment">Pending Payment</option>
              <option value="Paid">Paid</option>
              <option value="Cancelled">Cancelled</option>
              <option value="Completed">Complete</option>
            </select>
          </div>
        </div>

        <input href="selectt.php" type="submit" name="submit" class="btn btn-outline-secondary" style="float:left;" value="Cancel">
        <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
      </form>
    </div>
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>