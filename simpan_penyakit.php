<?php 

    include 'koneksi.php';
    $penyakit = $_POST['penyakit'];
    $ket = $_POST['ket'];
    $level = $_POST['level'];
    
    $sql = "INSERT INTO tb_penyakit (nama_penyakit,ket,level_penyakit) VALUES ('$penyakit','$ket','$level')";
    $query = mysqli_query($con,$sql);

    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Input')
                        window.location = 'penyakit.php';
                    </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Gagal Input')
                        window.location = 'penyakit.php';
                    </script>";
    }

?>