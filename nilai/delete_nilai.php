<?php
 include "config.php";

    mysqli_query($koneksi, "DELETE FROM data_nilai where siswa_id='$_GET[id]'");

    header('Location: index.php?page=nilai');
?>