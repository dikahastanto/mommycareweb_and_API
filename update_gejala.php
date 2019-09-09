<?php 

    include 'koneksi.php';
    $id = $_GET['id'];
    $gejala = $_POST['gejala'];
    $sql = "UPDATE tb_gejala SET gejala = '$gejala' WHERE id_gejala='$id'";
    $query = mysqli_query($con,$sql);

    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Update')
                        window.location = 'gejala.php';
                    </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Gagal Update')
                        window.location = 'gejala.php';
                    </script>";
    }

?>