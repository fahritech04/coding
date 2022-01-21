<?php
 include "../config.php";

    $id    = $_POST['id'];
    $nilai = $_POST['nilai'];


    mysqli_query($koneksi, "UPDATE nilai SET nilai='$nilai' WHERE id='$id'");
   
    header('Location: ../nilai/nilai.php');
?>