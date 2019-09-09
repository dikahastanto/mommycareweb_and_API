<?php 

    include 'koneksi.php';
    $gejala = $_POST['gejala'];
    $sql = "INSERT INTO tb_gejala (gejala) VALUES ('$gejala')";
    $query = mysqli_query($con,$sql);

    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Input')
                        window.location = 'gejala.php';
                    </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Gagal Input')
                        window.location = 'gejala.php';
                    </script>";
    }

?>