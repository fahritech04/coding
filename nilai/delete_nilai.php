<?php
 include "../config.php";

    mysqli_query($koneksi, "DELETE FROM data_nilai where id_nilai='$_GET[id]'");

    header('Location: ../nilai/nilai.php');
?>