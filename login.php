<?php
    session_start();
    if(isset($_SESSION['username'])){
        header('Location: dashboard/index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

    <!-- Custom fonts for this template-->
    <link href="dashboard/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="dashboard/assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="dashboard/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block">
                        <img src="img/logo.jpg" height="450px" width="450px">
                    </div> <!-- Ganti bg-register-image menjadi bg-login-image -->
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Login to Admin Dashboard</h1> <!-- Ubah judul -->
                            </div>
                            <form class="user" action="dashboard/model.php" method="post">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Enter Username">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Enter your password">
                                </div><br>
                                <button type="submit" name="login" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="dashboard/assets/vendor/jquery/jquery.min.js"></script>
    <script src="dashboard/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="dashboard/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="dashboard/assets/js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="dashboard/assets/vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="dashboard/assets/js/demo/chart-area-demo.js"></script>
    <script src="dashboard/assets/js/demo/chart-pie-demo.js"></script>
    <script src="dashboard/assets/js/demo/chart-bar-demo.js"></script>
    <script src="dashboard/assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="dashboard/assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="dashboard/assets/js/demo/datatables-demo.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    

</body>

</html>
