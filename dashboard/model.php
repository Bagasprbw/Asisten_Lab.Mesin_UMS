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
?>