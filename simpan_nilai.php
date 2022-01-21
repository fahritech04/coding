<?php
 include "./config.php";
 
    $nilai = $_POST['nilai'];

    mysqli_query($koneksi, "INSERT INTO 
    data_kelas (nilai) VALUE ('$nilai')");

    header('Location: kelas.php');
?>