<?php

    include "../koneksi.php";
    $penyakit = $_POST['penyakit'];

    $sql = "SELECT * FROM tb_solusi WHERE nama_penyakit = '$penyakit'";
    $query = mysqli_query($con,$sql);
    
    $solusis = array();
    while ($data = mysqli_fetch_array($query)) {
        $solusi = array();
        $solusi['solusi'] = $data['solusi'];
        array_push($solusis,$solusi);

    }
    $response = $solusis;
        $json = json_encode($response);
            print($json);

?>