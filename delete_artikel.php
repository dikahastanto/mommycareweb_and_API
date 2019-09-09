<?php 

    include 'koneksi.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_artikel WHERE id_artikel='$id'";
    $query = mysqli_query($con,$sql);

    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Dihapus')
                        window.location = 'artikel.php';
                    </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Gagal Dihapus')
                        window.location = 'artikel.php';
                    </script>";
    }

?>