<?php 

    include 'koneksi.php';
    $id = $_GET['id'];
    $penyakit = $_POST['penyakit'];
    $solusi = $_POST['solusi'];
    
    $sql = "UPDATE tb_solusi SET nama_penyakit='$penyakit',solusi='$solusi' WHERE id_solusi='$id'";
    $query = mysqli_query($con,$sql);
    
    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Update')
                        window.location = 'solusi.php';
                    </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Gagal Update')
                        window.location = 'solusi.php';
                    </script>";
    }

?>