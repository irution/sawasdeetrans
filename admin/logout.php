<?php
session_start();
session_destroy();

echo "<script>alert('ท่านได้ Logout เรียบร้อยแล้ว'); </script>";
echo "<meta http-equiv='refresh' content='0;URL=home.php'/>";

?>