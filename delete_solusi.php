<?php 

    include 'koneksi.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_solusi WHERE id_solusi='$id'";
    $query = mysqli_query($con,$sql);

    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Dihapus')
                        window.location = 'solusi.php';
                    </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Gagal Dihapus')
                        window.location = 'solusi.php';
                    </script>";
    }

?>