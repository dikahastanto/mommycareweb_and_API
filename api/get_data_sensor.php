<?php

    include "../koneksi.php";

    $username = $_GET['username'];

    $sql = "SELECT * FROM `tb_sensor` WHERE username='$username' ORDER BY tanggal LIMIT 1";
    $query = mysqli_query($con,$sql);

    $datas = array();
    $data = mysqli_fetch_array($query);

        $datas['suhu'] = $data['suhu'];
        $datas['detakjantung'] = $data['detakjantung'];
        $datas['sistolik'] = $data['sistolik'];
        $datas['diastolik'] = $data['diastolik'];

    $json = json_encode($datas);
    print($json);


?>