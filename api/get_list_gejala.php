<?php

    include "../koneksi.php";

    $sql = "SELECT * FROM tb_gejala";
    $query = mysqli_query($con,$sql);
    
    $listGejala = array();
    while ($data = mysqli_fetch_array($query)) {
        $gejala = array();
        $gejala['gejala'] = $data['gejala'];
        array_push($listGejala,$gejala);

    }
    $response = $listGejala;
        $json = json_encode($response);
            print($json);

?>