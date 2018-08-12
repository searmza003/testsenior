<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Project</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class ="continer">
            <h1 class="text-center">ระบบบริหารจัดการโครงการ สาขาวิศวกรรมซอฟต์แวร์ </h1>               
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto mt-5">
                <form action="" method="POST">
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="username" class="col-sm-3 col-form-label">ชื่อผู้ใช้งาน</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="username" name="username" placeholder="username" required autofocus > 
                            </div>                           
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-sm-3 col-form-label">รหัสผ่าน</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="password" name="password" placeholder="password" required>  
                            </div>                          
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>     

    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
</body>
</html>