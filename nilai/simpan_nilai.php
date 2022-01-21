<?php
 include "../config.php";
 
    $nilai = $_POST['nilai'];

    mysqli_query($koneksi, "INSERT INTO 
    nilai (nilai) VALUE ('$nilai')");

    header('Location: ../nilai/nilai.php');
?>