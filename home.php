<?php session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">              
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="navbar-nav auto">
                <a class="navbar-brand" href="#">
                  <img src="logo.png" with="40" height="40" class="d-inline-block align-top" alt="">
                </a>
                <?php if (isset($_SESSION['id'])) { ?>                   
                    <li class="nav-item">
                        <a class="nav-link " href="status_project.php" target="_blank">ตรวจสอบสถานะโครงการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="create_p.php">เขียนคำร้องขอเพิ่มโครงการ</a>
                    </li>
                    <?php } ?>                                     
                </ul>

                    <!-- สถานะผู้ใช้งาน -->
                    <ul class="navbar-nav ml-auto">       
                    <?php if (isset($_SESSION['id'])) { ?>                                                            
                        <li class="nav-item dropdown"> 
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            ยินดีต้อนรับ : <?php echo $_SESSION['name']; ?>
                            </a>           
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">ออกจากระบบ</a>
                            </div>
                        </li>                                       
                    <?php }else { ?>
                        <li class="nav-item">
                            <a class="nav-link " href="login.php">เข้าสู่ระบบ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="home.php">สมัครเข้าใช้งาน</a>
                        </li>
                    <?php } ?>
                    </ul>                     
                </div>
                
       </div>
    </nav>
    <!-- Page Content -->
    <?php if (isset($_SESSION['id'])) { ?> 
    <div class="container">
      <div class="row mt-5">
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">
                <a href="#">Project Name:</a>
              </h5>
              <p class="card-text">ชื่อผู้รับผิดชอบ :</p>
              <p class="card-text">ที่ปรึกษาโครงการ :</p>
              <p class="card-text">วันที่เริ่มโครงการ :</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">
                <a href="#">Project Name:</a>
              </h5>
              <p class="card-text">ชื่อผู้รับผิดชอบ :</p>
              <p class="card-text">ที่ปรึกษาโครงการ :</p>
              <p class="card-text">วันที่เริ่มโครงการ :</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">
                <a href="#">Project Name:</a>
              </h5>
              <p class="card-text">ชื่อผู้รับผิดชอบ :</p>
              <p class="card-text">ที่ปรึกษาโครงการ :</p>
              <p class="card-text">วันที่เริ่มโครงการ :</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">
                <a href="#">Project Name:</a>
              </h5>
              <p class="card-text">ชื่อผู้รับผิดชอบ :</p>
              <p class="card-text">ที่ปรึกษาโครงการ :</p>
              <p class="card-text">วันที่เริ่มโครงการ :</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">
                <a href="#">Project Name:</a>
              </h5>
              <p class="card-text">ชื่อผู้รับผิดชอบ :</p>
              <p class="card-text">ที่ปรึกษาโครงการ :</p>
              <p class="card-text">วันที่เริ่มโครงการ :</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <div class="card-body">
              <h5 class="card-title">
                <a href="#">Project Name:</a>
              </h5>
              <p class="card-text">ชื่อผู้รับผิดชอบ :</p>
              <p class="card-text">ที่ปรึกษาโครงการ :</p>
              <p class="card-text">วันที่เริ่มโครงการ :</p>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

      <!-- Pagination -->
      <ul class="pagination justify-content-center mt-5">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>
      <?php }else { ?>
        <?php } ?>
    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html>