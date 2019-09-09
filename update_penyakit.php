<?php 

    include 'koneksi.php';
    $id = $_GET['id'];
    $penyakit = $_POST['penyakit'];
    $ket = $_POST['ket'];
    $level = $_POST['level'];
    
    $sql = "UPDATE tb_penyakit SET nama_penyakit='$penyakit',ket='$ket',level_penyakit='$level' WHERE id_penyakit='$id'";
    $query = mysqli_query($con,$sql);

    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Update')
                        window.location = 'penyakit.php';
                    </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Gagal Update')
                        window.location = 'penyakit.php';
                    </script>";
    }

?>