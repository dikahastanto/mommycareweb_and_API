<?php 

    include 'koneksi.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_gejala WHERE id_gejala='$id'";
    $query = mysqli_query($con,$sql);

    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Dihapus')
                        window.location = 'gejala.php';
                    </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Gagal Dihapus')
                        window.location = 'gejala.php';
                    </script>";
    }

?>