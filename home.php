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
                <a class="navbar-brand" href="#">Logo</a>
                <?php if (isset($_SESSION['id'])) { ?>                   
                    <li class="nav-item">
                        <a class="nav-link " href="status_project.php">ตรวจสอบสถานะโครงการ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="create_p.php">เขียนคำร้องขอเพิ่มโครงการ</a>
                    </li>
                    <?php } ?>                                     
                </ul>
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
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html>