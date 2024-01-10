<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('Location: ../login.php');
    }
    $conn=mysqli_connect('localhost','root','','asisten_lab_tmums');
    if (isset($_POST['position_lab'])) {
        $selected_lab = $_POST['position_lab'];
        $result = "position_lab = '$selected_lab'";
    } else {
        $result = 1;
    }
    $query = "SELECT * FROM asistent WHERE $result ORDER BY name DESC";
    $getitem = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Data Asisten</title>
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
                            <?php if (isset($_SESSION['flash_message'])) : ?>
                                <div id="flash-message-del" class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Sukses</strong> <?= $_SESSION['flash_message'] ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <?php unset($_SESSION['flash_message']); ?>
                            <?php endif; ?>
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
                                            <td>
                                                <?php
                                                $photoPath = (!empty($item['photo'])) ? "../img/asisten/" . $item['photo'] : "../img/asisten/default_pfp.png";
                                                ?>
                                                <img src="<?= $photoPath; ?>" height="60" width="60" alt="">
                                            </td>

                                            <td>Lab. <?= $item['position_lab']; ?></td>
                                            <td><?= $item['telp']; ?></td>
                                            <td><?= $item['email']; ?></td>
                                            <td>@<?= $item['instagram']; ?></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <!-- hapus -->
                                                    <button type="button" onclick="confirmDelete(<?= $item['id_asistent'] ?>)" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-fw fa-trash-alt"></i> Delete
                                                    </button>
                                                    <!-- edit -->
                                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#chg<?= $item['id_asistent']; ?>">
                                                        <i class="fas fa-fw fa-pencil-alt"></i> Change
                                                    </button>
                                                </div>
                                                <!-- modal edit -->
                                                <div class="modal fade" id="chg<?= $item['id_asistent']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="model.php" method="post" enctype="multipart/form-data">
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">NIM:</label>
                                                                <input type="hidden" name="id_asistent" value="<?= $item['id_asistent'] ?>">
                                                                <input type="text" name="nim" value="<?= $item['nim']; ?>" class="form-control" id="recipient-name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Name:</label>
                                                                <input type="text" name="name" value="<?= $item['name']; ?>" class="form-control" id="recipient-name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Photo:</label>
                                                                <input type="file" accept="image/png, image/gif, image/jpeg" name="photo" class="form-control" id="recipient-name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Lab Position:</label>
                                                                <select name="position_lab" class="form-control" aria-label="Default select example">
                                                                    <option value="Komputer" <?php if ($item['position_lab'] === 'makanan') echo 'selected'; ?>>Komputer</option>
                                                                    <option value="Metalurgi" <?php if ($item['position_lab'] === 'Metalurgi') echo 'selected'; ?>>Metalurgi</option>
                                                                    <option value="Thermodinamika" <?php if ($item['position_lab'] === 'Thermodinamika') echo 'selected'; ?>>Thermodinamika</option>
                                                                    <option value="Manufaktur" <?php if ($item['position_lab'] === 'Manufaktur') echo 'selected'; ?>>Manufaktur</option>
                                                                    <option value="Perpindahan Kalor" <?php if ($item['position_lab'] === 'Perpindahan Kalor') echo 'selected'; ?>>Perpindahan Kalor</option>
                                                                    <option value="Mekanika Fluida" <?php if ($item['position_lab'] === 'Mekanika Fluida') echo 'selected'; ?>>Mekanika Fluida</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Date of Birth:</label>
                                                                <input type="date" name="date_of_birth" value="<?= $item['date_of_birth']; ?>" class="form-control" id="recipient-name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Telp/WA:</label>
                                                                <input type="text" name="telp" value="<?= $item['telp']; ?>" class="form-control" id="recipient-name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Instagram:</label>
                                                                <input type="text" name="instagram" value="<?= $item['instagram']; ?>" class="form-control" id="recipient-name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="recipient-name" class="col-form-label">Emai:</label>
                                                                <input type="email" name="email" value="<?= $item['email']; ?>" class="form-control" id="recipient-name">
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" name="edit_asisten"  class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                    </div>
                                                </div>
                                                </div>
                                            </td>
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
<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Anda tidak akan dapat mengembalikannya!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                // Jika pengguna mengonfirmasi, arahkan ke skrip hapus dengan parameter ID
                window.location.href = 'model.php?hapus=' + id;
            }
        });
    }
</script>
</body>
</html>