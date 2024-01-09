<?php
session_start();
$conn=mysqli_connect('localhost','root','','asisten_lab_tmums');
if (isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $query = "SELECT * FROM admin WHERE username='$username'";
    $hasil = mysqli_query($conn,$query);
    $admin = mysqli_fetch_array($hasil);
    if($password==$admin['password']) {
        session_start();
        $_SESSION['id_admin'] = $admin['id_admin'];
        $_SESSION['username'] = $admin['username'];
        header('Location: index.php');
    } else {
        header('Location: ../login.php');
    }
}

// tambah asisten
if(isset($_POST['addAsistent'])) {
    $nama_file = $_FILES['photo']['name'];
    $namasementara = $_FILES['photo']['tmp_name'];
    $dirUpload = "../img/asisten/";
    move_uploaded_file($namasementara,$dirUpload.$nama_file);
    $nim = $_POST['nim'];
    $name = $_POST['name'];
    $position_lab = $_POST['position_lab'];
    $date_of_birth = $_POST['date_of_birth'];
    $telp = $_POST['telp'];
    $instagram = $_POST['instagram'];
    $email = $_POST['email'];

    $query = "INSERT INTO asistent VALUES(
        '',
        '$nim',
        '$name',
        '$nama_file',
        '$position_lab',
        '$date_of_birth',
        '$telp',
        '$instagram',
        '$email'
        )";
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Asisten berhasil ditambahkan'); window.location.href = data_asistent.php;</script>";
        echo "<script>window.location.href = 'data_asisten.php';</script>";
    } else {
        echo "<script>alert('Gagal menambahkan data baru');</script>";
    }
}

if (isset($_GET['hapus'])) {
    $id_asisten = $_GET['hapus'];
    // Ambil nama file gambar dari database sebelum menghapus
    $query_select_gambar = "SELECT photo FROM asistent WHERE id_asistent = '$id_asisten'";
    $hasil_select_gambar = mysqli_query($conn, $query_select_gambar);
    $data_select_gambar = mysqli_fetch_assoc($hasil_select_gambar);
    $hapus_gambar = $data_select_gambar['photo'];
    // Hapus file gambar dari folder
    $path_to_gambar = "../img/asisten/" . $hapus_gambar;
    if (file_exists($path_to_gambar)) {
        unlink($path_to_gambar); // Hapus file gambar
    }
    // Lanjutkan dengan penghapusan data dari database
    $query_hapus_asisten = "DELETE FROM asistent WHERE id_asistent = '$id_asisten' ";
    if (mysqli_query($conn, $query_hapus_asisten)) {
        // Flash message sukses
        $_SESSION['flash_message'] = "Data berhasil dihapus.";
        echo "<script>window.location.href = document.referrer;</script>";
    } else {
        // Flash message gagal
        $_SESSION['flash_message'] = "Gagal menghapus data.";
        echo "<script>alert('Gagal menghapus');</script>";
    }
}
?>