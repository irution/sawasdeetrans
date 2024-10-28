<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>

<form action="check.php" method="post">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-warning text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
  
              <div class="mb-md-5 mt-md-4 pb-5">
  
                <h2 class="fw-bold mb-2 text-uppercase text-dark">SAWASDEETRANS Admin</h2>
                <p class="text-dark mb-5">กรุณากรอกชื่อผู้ใช้และรหัสผ่าน</p>
  
                <div class="form-outline form-white mb-4">
                  <input type="username" name="adUser" id="typeEmailX" class="form-control form-control-lg" placeholder="กรุณากรอกชื่อผู้ใช้" />
                  
                </div>
  
                <div class="form-outline form-white mb-4">
                  <input type="password" name="adPass" id="typePasswordX" class="form-control form-control-lg" placeholder="กรุณารหัสผ่าน" />
                </div>
                <button class="btn btn btn-dark btn-lg px-5" type="submit">เข้าสู่ระบบ</button>
                <h4>
                <a href="../home.php" class="btn btn btn-dark btn-lg px-5 mt-3" > กลับไปยังหน้าแรก </a>
</h4>
              </div>
  
            </div>
          </div>
        </div>
      </div>
    </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
  