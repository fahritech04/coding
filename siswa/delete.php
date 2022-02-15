<?php
 include "config.php";

    mysqli_query($koneksi, "DELETE FROM data_siswa where id_siswa='$_GET[id]'");

    header('Location: index.php?page=siswa');
?>