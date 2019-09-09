<?php 

    include 'koneksi.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_penyakit WHERE id_penyakit='$id'";
    $query = mysqli_query($con,$sql);

    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Dihapus')
                        window.location = 'penyakit.php';
                    </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Gagal Dihapus')
                        window.location = 'penyakit.php';
                    </script>";
    }

?>