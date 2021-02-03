<?php
    //membuat variable direktori json
    $file = "barang.json";
    //ambil data json
    $barang = file_get_contents($file);
    //mengubah data menjadi array
    $json = json_decode($barang, true);
    foreach($json as $key => $d){
        if ($d['jenisBarang'] ===  "Makanan") {
            $json[$key]['diskon'] = "10% + Rp 10.000";
        }elseif($d['jenisBarang'] === "Pakaian" && $d['hargaBarang'] > 200000){
            $json[$key]['diskon'] = "20%";
        }elseif($d['jenisBarang'] === "Elektronik"){
            $json[$key]['diskon'] = "30%";
        }
    }
    $jsonfile = json_encode($json);
    //update json
    $barang = file_put_contents($file, $jsonfile);
 ?>
