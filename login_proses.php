<?php 
session_start();
    include 'koneksi.php';
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_admin WHERE username='$username' AND password='$password'";
    $query = mysqli_query($con,$sql);
    $verf = mysqli_num_rows($query);

    if ($verf < 1) {
        echo    "<script type=text/Javascript> alert('Username/Password Salah!')
                        window.location = 'index.php';
                    </script>";
    }else {
        $data = mysqli_fetch_array($query);
        if ($data['status'] == 0) {
            $_SESSION['login-admin'] = true;
            $_SESSION['nama'] = $data['nama'];
            header('location: dashboard.php');
        } else {
            $_SESSION['login-dokter'] = true;
            $_SESSION['nama'] = $data['nama'];
            header('location: dashboard_dokter.php');
        }
    }
?>