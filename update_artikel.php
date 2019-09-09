<?php 

    include 'koneksi.php';
    $id = $_GET['id'];
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $sql = '';
    if (isset($_FILES['image'])) {
        $temp = explode(".", $_FILES["image"]["name"]);
        $nama_baru = round(microtime(true)) . '.' . end($temp);

        $folder_cover = "img/";
        $asal = $_FILES['image']['tmp_name'];
        $foto = $folder_cover. basename($nama_baru);
        $prosesupload = move_uploaded_file($_FILES['image']['tmp_name'], $foto);

        $image = $nama_baru;
        
        $sql = "UPDATE tb_artikel SET judul = '$judul', isi='$isi', gambar='$image' WHERE id_artikel='$id'";
    } else {
        echo 'disini';
        $sql = "UPDATE tb_artikel SET judul = '$judul', isi='$isi' WHERE id_artikel='$id'";
    }

    $query = mysqli_query($con,$sql);

    if ($query) {
        echo    "<script type=text/Javascript> alert('Berhasil Update')
                        window.location = 'artikel.php';
                    </script>";
    } else {
        echo    "<script type=text/Javascript> alert('Gagal Update')
                        window.location = 'artikel.php';
                    </script>";
    }

?>