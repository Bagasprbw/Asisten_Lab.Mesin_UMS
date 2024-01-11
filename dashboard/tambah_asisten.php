<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: ../login.php');
    }
    $conn=mysqli_connect('localhost','root','','asisten_lab_tmums');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tambah Asisten</title>
    <?php include "layout/_css.php"; ?>
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <?php include "layout/sidebar.php"; ?>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <?php include "layout/topbar.php"; ?>
                <!-- End of Topbar -->
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Data Asisten</h1>

                    <!-- Content -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Asisten Laboratorium</h6>
                        </div>
                        <div class="card-body">
                            <!-- form cari asisten berdasarkan posisinya -->
                            <h3 class="text-center font-weight-bold mt-3 mb-5">Form Input Asisten Laboratorium Teknik Mesin-UMS</h3>
                            <form action="model.php" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">NIM</label>
                                    <input type="text" name="nim" class="form-control" placeholder="Example: D100110111" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nama</label>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tanggal Lahir</label>
                                    <input type="date" name="date_of_birth" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Foto</label>
                                    <input type="file" accept="image/png, image/gif, image/jpeg" name="photo" class="form-control">
                                    <small id="" class="form-text text-muted">Min. 200X200 px | Max. 512X512 px</small>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Posisi</label>
                                    <select name="position_lab" id="recipient-name" class="form-control">
                                        <option value="Komputer">Lab. Komputer</option>
                                        <option value="Metalurgi">Lab. Metalurgi</option>
                                        <option value="Thermodinamika">Lab. Thermodinamika</option>
                                        <option value="Manufaktur">Lab. Manufaktur / Produksi</option>
                                        <option value="Perpindahan Kalor">Lab. Perpindahan Kalor</option>
                                        <option value="Mekanika Fluida">Lab. Mekanika Fluida</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">No Telp / Wa</label>
                                    <input type="text" name="telp" class="form-control"  placeholder="Enter No telp/Wa" required>
                                </div>
                                <div class="form-group">
                                    <label for="validationCustomUsername">Email address</label>
                                    <div class="input-group">
                                        <input type="email" name="email" class="form-control" id="validationCustomUsername" placeholder="Enter email" aria-describedby="inputGroupPrepend">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="validationCustomUsername">Instagram</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        </div>
                                        <input type="text" name="instagram" class="form-control" id="validation_input_ig" placeholder="Example: Exm_xyz" aria-describedby="inputGroupPrepend">
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" name="addAsistent" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                    <!-- Content -->
                </div>
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
<?php include "layout/_js.php"; ?>
<script>
    // Menggunakan JavaScript untuk menanggapi perubahan pada elemen <select>
    document.getElementById('position_lab').addEventListener('change', function () {
        // Otomatis mengirim formulir saat memilih posisi laboratorium
        document.getElementById('searchForm').submit();
    });
</script>
</body>
</html>