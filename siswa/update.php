<?php
 include "../config.php";

    $id_siswa   = $_POST['id_siswa'];
    $nama_siswa = $_POST['nama_siswa'];
    $kelas_id   = $_POST['kelasx'];
    $no_hp      = $_POST['no_hp'];
    $alamat     = $_POST['alamat'];

    mysqli_query($koneksi, "UPDATE data_siswa  SET nama_siswa='$nama_siswa', 
    kelas_id='$kelas_id', no_hp='$no_hp', alamat='$alamat' WHERE id_siswa='$id_siswa'");
   
    header('Location: ../siswa/index.php');
?>