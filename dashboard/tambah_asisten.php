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
                            <form id="searchForm" action="" method="post">
                                <div class="form row align-items-center">
                                    <div class="col-md-4 mb-3">
                                        <label for="lab_position">Pilih Posisi Laboratorium:</label>
                                        <select class="form-control" id="position_lab" name="position_lab">
                                            <option value="" selected>-- Pilih Posisi --</option>
                                            <option value="Komputer">Komputer</option>
                                            <option value="Metalurgi">Metalurgi</option>
                                            <option value="Thermodinamika">Thermodinamika</option>
                                            <option value="Manufaktur">Manufaktur</option>
                                            <option value="Perpindahan Kalor">Perpindahan Kalor</option>
                                            <option value="Mekanika Fluida">Mekanika Fluida</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 mt-3">
                                        <a class="btn btn-primary btn-sm" href="data_asisten.php">All...</a>
                                    </div>
                                </div>
                            </form>
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Foto</th>
                                            <th>Posisi</th>
                                            <th>Telp</th>
                                            <th>Email</th>
                                            <th>Instagram</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while ($item = mysqli_fetch_array($getitem)) { ?>
                                        <?php
                                            $id_asistent = $item['id_asistent'];
                                            $nim = $item['nim'];
                                            $name = $item['name'];
                                            $date_of_birth = $item['date_of_birth'];
                                            $position_lab = $item['position_lab'];
                                            $photo = $item['photo'];
                                            $telp = $item['telp'];
                                            $email = $item['email'];
                                            $instagram = $item['instagram'];
                                        ?>
                                        <tr>
                                            <td><?= $item['nim']; ?></td>
                                            <td><?= $item['name']; ?></td>
                                            <td><?= $item['date_of_birth']; ?></td>
                                            <td><img src="../img/asisten/<?= $item['photo']; ?>" height="60" width="60" alt=""></td>
                                            <td>Lab. <?= $item['position_lab']; ?></td>
                                            <td><?= $item['telp']; ?></td>
                                            <td><?= $item['email']; ?></td>
                                            <td>@<?= $item['instagram']; ?></td>
                                            <td> | </td>
                                        </tr>
                                        <?php } ?>
                                        <?php if (mysqli_num_rows($getitem) > 0) { ?>
                                        <?php } else {
                                            echo "
                                            <tr>
                                                <td class='table-secondary text-center' colspan='9'>No data refund</td>
                                            </tr>";
                                        } ?>
                                    </tbody>
                                </table>
                            </div>
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