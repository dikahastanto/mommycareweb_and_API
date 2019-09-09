<?php 
    include "koneksi.php";

    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    
    $temp = explode(".", $_FILES["image"]["name"]);
    $nama_baru = round(microtime(true)) . '.' . end($temp);

    $folder_cover = "img/";
    $asal = $_FILES['image']['tmp_name'];
    $foto = $folder_cover. basename($nama_baru);
    $prosesupload = move_uploaded_file($_FILES['image']['tmp_name'], $foto);

    $image = $nama_baru;

    

    $sql = "INSERT INTO tb_artikel (judul,isi,gambar) VALUES ('$judul', '$isi', '$image')";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Input')
                        window.location = 'artikel.php';
                    </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Berhasil Input')
                        window.location = 'artikel.php';
                    </script>";
    }

?>