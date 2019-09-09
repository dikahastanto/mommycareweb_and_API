<?php 

    include 'koneksi.php';
    $penyakit = $_POST['penyakit'];
    $gejala = $_POST['gejala'];

    $sql = "INSERT INTO tb_diagnosa (penyakit,gejala) VALUES ('$penyakit','$gejala')";
    $query = mysqli_query($con,$sql);

    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Input')
                        window.location = 'diagnosa.php';
                    </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Gagal Input')
                        window.location = 'diagnosa.php';
                    </script>";
    }


?>