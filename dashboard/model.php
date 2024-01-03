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
?>