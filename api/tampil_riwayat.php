<?php

    include "../koneksi.php";

    $username = $_GET['username'];

    $sql = "SELECT * FROM tb_riwayat_penyakit WHERE username = '$username'";
    $query = mysqli_query($con,$sql);

    $datas = array();
    while ($data = mysqli_fetch_array($query)) {
        $data_penyakit = array();
        $data_penyakit['penyakit'] = $data['penyakit'];
        $data_penyakit['tgl'] = $data['tgl'];
        array_push($datas,$data_penyakit);
    }
    $response = $datas;
    $json = json_encode($response);
    print($json);


?>