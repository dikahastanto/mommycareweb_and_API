<?php

    include "../koneksi.php";

    $gejala1 = $_POST['gejala1'];
    $gejala2 = $_POST['gejala2'];
    $gejala3 = $_POST['gejala3'];
    $gejala4 = $_POST['gejala4'];
    $gejala5 = $_POST['gejala5'];

    $sql_penyakit = "SELECT DISTINCT(penyakit) FROM tb_diagnosa WHERE gejala LIKE ('$gejala1') OR gejala LIKE ('$gejala2') OR gejala LIKE ('$gejala3') OR gejala LIKE ('$gejala4') OR gejala LIKE ('$gejala5')";
    $query_penyakit = mysqli_query($con,$sql_penyakit);
    $jumlah_diagnosa = mysqli_num_rows($query_penyakit);

    if ($jumlah_diagnosa < 1) {
        $response = array();
        $response['status'] = true;
        $response['pesan'] = "Tidak Ada Penyakit Yang Terdeteksi";
        $json = json_encode($response);
        print($json);
    }else{
        $penyakits = array();
        while ($diagnosa = mysqli_fetch_array($query_penyakit)) {
            $nama_penyakit = $diagnosa['penyakit'];
            $sql = "SELECT * FROM tb_diagnosa 
            WHERE 
            (gejala = '$gejala1' AND penyakit = '$nama_penyakit') OR 
            (gejala = '$gejala2' AND penyakit = '$nama_penyakit') OR 
            (gejala = '$gejala3' AND penyakit = '$nama_penyakit') OR 
            (gejala = '$gejala4' AND penyakit = '$nama_penyakit') OR 
            (gejala = '$gejala5' AND penyakit = '$nama_penyakit')";
            $query = mysqli_query($con,$sql);
            $jumlah = mysqli_num_rows($query);
            $persentase = ($jumlah * 100) / 5;
            if ($persentase >= 40) {
                
                $penyakit['penyakit'] = $diagnosa['penyakit'];
                $penyakit['persentase'] = $persentase . "%";
                array_push($penyakits,$penyakit);
                
            }

        }
        if ($penyakits==[]) {
            $response['penyakit'] = "Tidak ada";
        }else{
            
            $response = $penyakits;
        }
        $json = json_encode($response);
            print($json);

    }

    
    
?>