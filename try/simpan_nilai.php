<?php
 include "../config.php";
 
    $nilai = $_POST['nilai'];

    mysqli_query($koneksi, "INSERT INTO 
    nilai (id_siswa, nilai) VALUE ('$id_siswa', '$nilai')");

    header('Location: ../nilai/nilai.php');
?>