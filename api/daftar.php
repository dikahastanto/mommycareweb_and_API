<?php

    include "../koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $kehamilanke = $_POST['kehamilanke'];
    $bb = $_POST['bb'];
    $golongandarah = $_POST['golongandarah'];
    $riwayatpenyakit = $_POST['riwayatpenyakit'];
    $hpht = $_POST['hpht'];

    $cek = "SELECT * FROM tb_user WHERE username = '$username'";
    $query_cek = mysqli_query($con,$cek);
    $cek_user = mysqli_num_rows($query_cek);

    if ($cek_user > 0) {
        $response = array();
        $response['error'] = true;
        $response['pesan'] = "Username Sudah Ada";
        $json = json_encode($response);
        print($json);
    }else{
        $sql = "INSERT INTO tb_user (username,password,nama_lengkap,umur,kehamilanke,beratbadan,golongandarah,riwayatpenyakit,hpht) VALUES ('$username','$password','$nama','$umur','$kehamilanke','$bb','$golongandarah','$riwayatpenyakit','$hpht')";
        $query = mysqli_query($con,$sql);

        if ($query) {
            
            $response = array();
            $response['error'] = false;
            $response['pesan'] = "Berhasil Daftar";
            $json = json_encode($response);
            print($json);

        }else{  

            $response = array();
            $response['status'] = true;
            $response['pesan'] = "Gagal";
            $json = json_encode($response);
            print($json);
            
        }
    }

?>