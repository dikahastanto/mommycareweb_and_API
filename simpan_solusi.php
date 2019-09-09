<?php 

    include 'koneksi.php';
    $penyakit = $_POST['penyakit'];
    $solusi = $_POST['solusi'];
    
    $sql = "INSERT INTO tb_solusi (nama_penyakit,solusi) VALUES ('$penyakit','$solusi')";
    $query = mysqli_query($con,$sql);

    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Input')
                        window.location = 'solusi.php';
                    </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Gagal Input')
                        window.location = 'solusi.php';
                    </script>";
    }

?>