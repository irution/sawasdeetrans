<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>บริการเช่ารถ</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css"
    integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css"
    integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="justfont.css" rel="stylesheet">
</head>

<body>
  <!-- nav -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top shadow-sm font">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="home.php">
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
            <a class="nav-link" href="home.php">หน้าหลัก</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="infomation.php">บริการเช่ารถ</a>
          </li>
          <!-- เชื่อมหน้าเข้าสู่ระบบหลังบ้านให้ด้วย -->
          <li class="nav-item">
            <a class="nav-link" href="admin/home.php">เข้าสู่ระบบ</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </div>

  <body>
    <div id="car">

    </div>

    <!-- รูปแบบ -->

    <div class="container-fluid container-lg font">
      <div id="row1" class="p-4 rounded-4">
        <div class="col-8" id="pricecar"> <!-- offset-4 text-start text-start center end -->
        </div>
      </div> <!-- row1 -->

      <div id="row2" class="row text-center mt-5">
        <h4 align="center" class="display-6 mb-5 fw-bold">รูปแบบและราคารถ</h4>
        <div class="col-md mt-3 order-md-1 order-3">

        <div class="container">
          <div class="row">
            <!-- กล่องที่ 1 Toyota Camry-->
            <div class="col-md-6 mb-4">
              <div class="card p-3 shadow-sm rounded-4" style="max-width: 100%;">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="image/camry1.png" class="img-fluid rounded-start mt-4" alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h5 class="card-title mt-3 fw-bold">Toyota Camry</h5>
                      <p class="card-text">จำนวนที่นั่ง 2-3 คน<br>รายวัน 10 ชม.<br>เริ่มต้น 900.-</p>
                      <button type="button" class="btn btn-warning d-grid gap-2 col-6 mx-auto fw-bold"
                        data-bs-toggle="modal" data-bs-target="#car1">
                        รายละเอียด
                      </button>
                    </div>
                  </div>
                </div>

                <!-- Toyota Camry -->
                <div class="modal fade" id="car1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">รายละเอียดรถ</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <img src="image/camry1.png" class="img-fluid rounded-start" alt="...">
                        <div class="text-center fw-bold mt-4 display-6">
                          Toyota Camry
                        </div>
                        <div class="mt-2 p-5" style="text-align: left; margin: 0;">
                          - รับ-ส่ง ราคาเริ่มต้น 600 บาท <br>
                          - ระยะเวลา 10 ชม. ค่าล่วงเวลา 200-300.-/ชม. <br><br>
                          **หมายเหตุ: ทั้งนี้ราคาสุทธิขึ้นอยู่กับระยะทางหรือตามข้อตกลง**
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">ปิด</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- กล่องที่ 2 Toyota Fortuner-->
            <div class="col-md-6 mb-4">
              <div class="card p-3 shadow-sm rounded-4" style="max-width: 100%;">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="image/in2.png" class="img-fluid rounded-start mt-4" alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h5 class="card-title mt-3 fw-bold">Toyota Fortuner</h5>
                      <p class="card-text">จำนวนที่นั่งไม่เกิน 6 คน<br>รายวัน 10 ชม.<br>เริ่มต้น 800.-</p>
                      <button type="button" class="btn btn-warning d-grid gap-2 col-6 mx-auto fw-bold"
                        data-bs-toggle="modal" data-bs-target="#car2">
                        รายละเอียด
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Toyota Fortuner -->
              <div class="modal fade" id="car2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">รายละเอียดรถ</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <img src="image/in2.png" class="img-fluid rounded-start" alt="...">
                      <div class="text-center fw-bold mt-4 display-6">
                        Toyota Fortuner
                      </div>
                      <div class="mt-2 p-5" style="text-align: left; margin: 0;">
                        - รับ-ส่ง ราคาเริ่มต้น 800 บาท <br>
                        - ระยะเวลา 10 ชม. ค่าล่วงเวลา 200-300.-/ชม. <br><br>
                        **หมายเหตุ: ทั้งนี้ราคาสุทธิขึ้นอยู่กับระยะทางหรือตามข้อตกลง**
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">ปิด</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- กล่องที่ 3 Toyota Commuter-->
            <div class="col-md-6 mb-4">
              <div class="card p-3 shadow-sm rounded-4" style="max-width: 100%">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="image/in3.png" class="img-fluid rounded-start mt-4" alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h5 class="card-title mt-3 fw-bold">Toyota Commuter</h5>
                      <p class="card-text">จำนวนที่นั่ง 5-10 คน<br>รายวัน 10 ชม.<br>เริ่มต้น 1,000.-</p>
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-warning d-grid gap-2 col-6 mx-auto fw-bold"
                        data-bs-toggle="modal" data-bs-target="#car3">
                        รายละเอียด
                      </button>
                    </div>
                  </div>
                </div>

                <!-- Toyota Commuter -->
                <div class="modal fade" id="car3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">รายละเอียดรถ</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <img src="image/in3.png" class="img-fluid rounded-start" alt="...">
                        <div class="text-center fw-bold mt-4 display-6">
                          Toyota Commuter
                        </div>
                        <div class="mt-2 p-5" style="text-align: left; margin: 0;">
                          - รับ-ส่ง ราคาเริ่มต้น 1,000 บาท <br>
                          - กรุงเทพ - ปริมณฑล ราคาเริ่มต้น 2,500 บาท <br>
                          - กรุงเทพ - ต่างจังหวัด ราคาเริ่มต้น 3,500 บาท <br>
                          - ระยะเวลา 10 ชม. ค่าล่วงเวลา 200-300.-/ชม. <br><br>
                          **หมายเหตุ: ทั้งนี้ราคาสุทธิขึ้นอยู่กับระยะทางหรือตามข้อตกลง**
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">ปิด</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- กล่องที่ 4 Hyundai H-1-->
            <div class="col-md-6 mb-4">
              <div class="card p-3 shadow-sm rounded-4" style="max-width: 100%;">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="image/in5.png" class="img-fluid rounded-start mt-4" alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h5 class="card-title mt-3 fw-bold">Hyundai H-1</h5>
                      <p class="card-text">จำนวนที่นั่งไม่เกิน 5 คน<br>รายวัน 10 ชม.<br>เริ่มต้น 1,500 บาท</p>
                      <button type="button" class="btn btn-warning d-grid gap-2 col-6 mx-auto fw-bold"
                        data-bs-toggle="modal" data-bs-target="#car4">
                        รายละเอียด
                      </button>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Modal Hyundai H-1 -->
              <div class="modal fade" id="car4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">รายละเอียดรถ</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <img src="image/in5.png" class="img-fluid rounded-start" alt="...">
                      <div class="text-center fw-bold mt-4 display-6">
                        Hyundai H-1
                      </div>
                      <div class="mt-2 p-5" style="text-align: left; margin: 0;">
                        - รับ-ส่ง ราคาเริ่มต้น 1,500 บาท <br>
                        - กรุงเทพ - ปริมณฑล ราคาเริ่มต้น 2,500 บาท <br>
                        - กรุงเทพ - ต่างจังหวัด ราคาเริ่มต้น 4,000 บาท <br>
                        - ระยะเวลา 10 ชม. ค่าล่วงเวลา 200-300.-/ชม. <br><br>
                        **หมายเหตุ: ทั้งนี้ราคาสุทธิขึ้นอยู่กับระยะทางหรือตามข้อตกลง**
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning" data-bs-dismiss="modal">ปิด</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <!-- กล่องที่ 5 Toyota Majesty-->
            <div class="col-md-6 mb-4">
              <div class="card p-3 shadow-sm rounded-4" style="max-width: 100%;">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="image/in4.png" class="img-fluid rounded-start mt-4" alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h5 class="card-title mt-3 fw-bold">Toyota Majesty</h5>
                      <p class="card-text">จำนวนที่นั่ง 5-6 คน<br>รายวัน 10 ชม.<br>เริ่มต้น 2,000 บาท</p>
                      <button type="button" class="btn btn-warning d-grid gap-2 col-6 mx-auto fw-bold"
                        data-bs-toggle="modal" data-bs-target="#car5">
                        รายละเอียด
                      </button>
                    </div>
                  </div>
                </div>

                <!-- Modal Toyota Alphard -->
                <div class="modal fade" id="car5" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">รายละเอียดรถ</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        <img src="image/alpha.jpg" class="img-fluid rounded-start" alt="...">
                        <div class="text-center fw-bold mt-4 display-6">
                          Toyota Majesty
                        </div>
                        <div class="mt-2 p-5" style="text-align: left; margin: 0;">
                          - รับ-ส่ง ราคาเริ่มต้น 2,000 บาท <br>
                          - กรุงเทพ - ปริมณฑล ราคาเริ่มต้น 3,500 บาท <br>
                          - กรุงเทพ - ต่างจังหวัด ราคาเริ่มต้น 4,500 บาท <br>
                          - ระยะเวลา 10 ชม. ค่าล่วงเวลา 200-300.-/ชม. <br><br>
                          **หมายเหตุ: ทั้งนี้ราคาสุทธิขึ้นอยู่กับระยะทางหรือตามข้อตกลง**
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">ปิด</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- กล่องที่ 6 Toyota Alphard-->
            <div class="col-md-6 mb-4">
              <div class="card p-3 shadow-sm rounded-4" style="max-width: 100%;">
                <div class="row g-0">
                  <div class="col-md-6">
                    <img src="image/alpha.jpg" class="img-fluid rounded-start mt-4" alt="...">
                  </div>
                  <div class="col-md-6">
                    <div class="card-body">
                      <h5 class="card-title mt-3 fw-bold">Toyota Alphard</h5>
                      <p class="card-text">จำนวนที่นั่ง 2-4 คน<br>รายวัน 10 ชม.<br>เริ่มต้น 3,000.-</p>
                      <button type="button" class="btn btn-warning d-grid gap-2 col-6 mx-auto fw-bold"
                        data-bs-toggle="modal" data-bs-target="#car6">
                        รายละเอียด
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Modal Toyota Alphard -->
            <div class="modal fade" id="car6" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">รายละเอียดรถ</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <img src="image/alpha.jpg" class="img-fluid rounded-start" alt="...">
                    <div class="text-center fw-bold mt-4 display-6">
                      Toyota Alphard
                    </div>
                    <div class="mt-2 p-5" style="text-align: left; margin: 0;">
                      - รับ-ส่ง ราคาเริ่มต้น 3,000 บาท <br>
                      - กรุงเทพ - ปริมณฑล ราคาเริ่มต้น 4,500 บาท <br>
                      - กรุงเทพ - ต่างจังหวัด ราคาเริ่มต้น 5,000 บาท <br>
                      - ระยะเวลา 10 ชม. ค่าล่วงเวลา 200-300.-/ชม. <br><br>
                      **หมายเหตุ: ทั้งนี้ราคาสุทธิขึ้นอยู่กับระยะทางหรือตามข้อตกลง**
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal">ปิด</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>



      </div> <!-- container -->

      <!-- สถานที่ท่องเที่ยวยอดนิยม -->

      <div id="travel">

      </div> <!-- container -->
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"></script>
    <script src="time.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
      integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script type="text/javascript">
      $('.carousel-view').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
          {
            breakpoint: 900,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 600,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    </script>
  </body>


  <!-- Footer -->
  <footer class="footer text-center font mt-4">
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