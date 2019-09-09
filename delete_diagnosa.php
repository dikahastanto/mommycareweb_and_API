<?php 

    include 'koneksi.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM tb_diagnosa WHERE id_diagnosa='$id'";
    $query = mysqli_query($con,$sql);

    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Dihapus')
                        window.location = 'diagnosa.php';
                    </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Gagal Dihapus')
                        window.location = 'diagnosa.php';
                    </script>";
    }

?>