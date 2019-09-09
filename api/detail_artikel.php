<?php

    include "../koneksi.php";

    $id = $_GET['id'];

    $sql = "SELECT * FROM tb_artikel WHERE id_artikel = $id";
    $query = mysqli_query($con,$sql);

    $datas = array();
    $data = mysqli_fetch_array($query);

        $datas['id'] = $data['id_artikel'];
        $datas['judul'] = $data['judul'];
        $datas['isi'] = $data['isi'];
        $datas['gambar'] = $data['gambar'];
        $datas['tanggal'] = $data['tanggal'];

    $json = json_encode($datas);
    print($json);


?>