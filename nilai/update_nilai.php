<?php
 include "config.php";

    $siswa_id    = $_POST['siswa_id'];
    $nilai       = $_POST['nilai'];


    mysqli_query($koneksi, "UPDATE data_nilai SET nilai='$nilai' WHERE siswa_id='$siswa_id'");
   
    header('Location: index.php?page=nilai');
?>