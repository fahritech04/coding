<?php
 include "../config.php";

    mysqli_query($koneksi, "DELETE FROM data_siswa where id='$_GET[id]'");

    header('Location: ../siswa/index.php');
?>