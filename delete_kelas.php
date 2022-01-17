<?php
 include "./config.php";

    mysqli_query($koneksi, "DELETE FROM data_kelas where id='$_GET[id]'");

    header('Location: kelas.php');
?>