<?php

    include "../koneksi.php";

    $sql = "SELECT * FROM tb_artikel";
    $query = mysqli_query($con,$sql);

    $datas = array();
    while ($data = mysqli_fetch_array($query)) {
        $data_artikel = array();
        $data_artikel['id'] = $data['id_artikel'];
        $data_artikel['judul'] = $data['judul'];
        $data_artikel['isi'] = $data['isi'];
        $data_artikel['gambar'] = $data['gambar'];
        $data_artikel['tanggal'] = $data['tanggal'];
        array_push($datas,$data_artikel);
    }
    $response = $datas;
    $json = json_encode($response);
    print($json);


?>