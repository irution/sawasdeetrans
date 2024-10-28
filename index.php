<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SAWASDEETAXI</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="project.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
    integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /> 
  <link href="justfont.css" rel="stylesheet">

</head>

<body>
  <!-- nav -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm font">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="image/logo.png" alt="logo" width="40" class="me-2">
        <span class="fw-bold">SAWASDEETRANS</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">หน้าหลัก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="infomation.php">บริการเช่ารถ</a>
          </li>
          <!-- เชื่อมหน้าเข้าสู่ระบบหลังบ้านให้ด้วย -->
          <li class="nav-item">
            <a class="nav-link" href="admin/home.php">เข้าสู่ระบบ</a> 
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- head -->
  <div class="container-fluid mt-5 pt-5 font">
    <div class="row wallpapera .text-header align-items-center">
      <div class="col-lg-6 p-5">
        <h1 class="display-3 fw-bold">SAWASDEETRANS</h1>
        <p class="lead display-6 fw-bold">เที่ยวไทยสบาย ๆ กับรถ VIP</p>
      </div>
      <div class="col-lg-6 text-center">
        <img src="image/car_header.jpg" class="img-fluid rounded">
      </div>
    </div>
  </div>

  <!-- line -->
  <div class="container-fluid p-5 font">
    <div class="row">
      <div class="col-md-5 mt-5 mb-3">
        <hr class="bg-dark">
      </div>
      <div class="col-md-2 text-center">
        <img src="image/logo.png" width="100" height="100">
      </div>
      <div class="col-md-5 mt-5 mb-3">
        <hr class="bg-dark">
      </div>
    </div>
  </div>

  <!-- profile -->
  <div id="1"></div>

  <div class="container-fluid mb-5 font">
    <div class="row wallpaperd align-items-center p-5">
      <div class="container-fluid container-lg mt-4 font">
      <h6 class="mt-7 display-5 fw-bold mt-2" align="center">เกี่ยวกับเรา</h6>
    </div>
      <div class="col-lg-6 text-center">
        <img src="image/4.png" class="img-fluid" alt="Profile Image">
      </div>
      <div class="col-lg-6 text-center text-lg-start">
        <h1 class="display-5 fw-bold">SAWASDEETRANS</h1>
        <p class=".text-muted fs-5 mb-4">บริการให้เช่ารถตู้พร้อมคนขับสำหรับการเดินทางท่องเที่ยว การประชุมสัมมนา
          และการรับส่งสนามบิน</p>
      </div>
    </div>
  </div>
  <!-- cars card -->
  <section class="container mb-5 .font-medium font">
    <h2 class="text-center mb-4">รูปแบบรถ</h2>
    <div class="row text-center g-4">
      <div class="col-lg-3 col-md-6">
        <div class="card h-100 shadow-sm">
          <img src="image/in2.png" class="card-img-top" alt="Toyota Fortuner">
          <div class="card-body">
            <h5 class="card-title">Toyota Fortuner</h5>
          </div>
          <div class="card-footer">
            <a href="infomation.php#pricecar" class="btn btn-warning fw-bold">รายละเอียด</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card h-100 shadow-sm">
          <img src="image/in3.png" class="card-img-top" alt="Toyota VIP Van 10 seats">
          <div class="card-body">
            <h5 class="card-title">Toyota Commuter</h5>
          </div>
          <div class="card-footer">
            <a href="infomation.php#pricecar" class="btn btn-warning fw-bold">รายละเอียด</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card h-100 shadow-sm">
          <img src="image/in4.png" class="card-img-top" alt="2020 Toyota Majesty">
          <div class="card-body">
            <h5 class="card-title mt-4">Toyota Majesty</h5>
          </div>
          <div class="card-footer">
            <a href="infomation.php#pricecar" class="btn btn-warning fw-bold">รายละเอียด</a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="card h-100 shadow-sm">
          <img src="image/in5.png" class="card-img-top" alt="H1 GRAND STAREX VIP">
          <div class="card-body">
            <h5 class="card-title mt-4">Hyundai H-1</h5>
          </div>
          <div class="card-footer">
            <a href="infomation.php#pricecar" class="btn btn-warning fw-bold">รายละเอียด</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- driver's profile -->
  <div class="container-fluid mb-5 font">
    <div class="row align-items-center wallpapera p-5">
      <div class="col-lg-6 text-lg-start text-center p-5">
        <h3 class="display-6 fw-bold">คนขับ รถตู้</h3>
        <p class="fs-5 .text-muted mb-4">
          <i class="bi bi-geo-alt-fill"></i> ประสบการณ์ขับรถมานานกว่า 15 ปี<br />
          <i class="bi bi-compass-fill"></i> ไปมาแล้วเกือบทุกจังหวัดทั่วประเทศไทย<br />
          <i class="bi bi-map"></i> ไม่ว่าลงขึ้นเหนือ ลงใต้<br />
          <i class="bi bi-shield-fill-check"></i> ไม่มีประวัติอาชญากรรม<br />
          <i class="bi bi-traffic-cone-fill"></i> เคารพกฎจราจรอย่างเคร่งครัด<br />
        </p>
      </div>
      <div class="col-lg-6 text-center">
        <img src="image/d2.png" class="img-fluid" alt="Driver Image">
      </div>
    </div>
  </div>

</body>


<!-- Footer -->
<footer class="footer text-center font">
  <div class="container">
    <div class="d-flex justify-content-center mb-3">
      <a href="#" class="me-4"><i class="bi bi-telephone"></i></a>
      <a href="#" class="me-4"><i class="bi bi-facebook"></i></a>
      <a href="#" class="me-4"><i class="bi bi-line"></i></a>
    </div>
    <p>© 2024 SAWASDEETRANS. All rights reserved.</p>
  </div>
</footer>

</html>