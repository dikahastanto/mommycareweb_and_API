<?php

    include "../koneksi.php";

    $username = $_POST['username'];
    $penyakit = $_POST['penyakit'];
    date_default_timezone_set('Asia/Jakarta');
    $tgl = date('Y-m-d');
    $sql_cek = "SELECT * FROM tb_riwayat_penyakit WHERE username = '$username' AND penyakit = '$penyakit'";
    $query_cek = mysqli_query($con,$sql_cek);
    
    $jumlah = mysqli_num_rows($query_cek);
    if ($jumlah < 1) {
        $sql = "INSERT INTO tb_riwayat_penyakit (username,penyakit,tgl) VALUES ('$username','$penyakit','$tgl')";
        $query = mysqli_query($con,$sql);
        $response = array();
        if ($query) {
            $response['error'] = false;
            $response['pesan'] = "Berhasil";
            $json = json_encode($response);
            print($json);

        }else{
            $response['error'] = true;
            $response['pesan'] = "Gagal";
            $json = json_encode($response);
            print($json);
        }
    }else{
        $response['error'] = true;
        $response['pesan'] = "Penyakit Sudah Ditambahkan";
        $json = json_encode($response);
        print($json);
    }

?>