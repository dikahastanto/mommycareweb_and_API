<?php

    include "../koneksi.php";

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tb_user WHERE username = '$username' AND password = '$password'";
    $query = mysqli_query($con,$sql);
    $verf  = mysqli_num_rows($query);
    if ($verf < 1) {

        $response = array();
        $response['status'] = true;
        $response['pesan'] = "Username atau Password Salah!";
        $json = json_encode($response);
        print($json);

    }else{
        $user = array();
        $data = mysqli_fetch_array($query);
            $user['username'] = $data['username'];
            $user['password'] = $data['password'];
            $user['nama_lengkap'] = $data['nama_lengkap'];
            $user['umur'] = $data['umur'];
            $user['kehamilanke'] = $data['kehamilanke'];
            $user['beratbadan'] = $data['beratbadan'];
            $user['golongandarah'] = $data['golongandarah'];
            $user['riwayatpenyakit'] = $data['riwayatpenyakit'];
            $user['hpht'] = $data['hpht'];
        
        $response = array();
        $response['status'] = false;
        $response['data'] = $user;
        $json = json_encode($response);
        print($json);
    }

?>