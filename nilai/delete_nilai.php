<?php
 include "../config.php";

    mysqli_query($koneksi, "DELETE FROM nilai where id='$_GET[id]'");

    header('Location: ../nilai/nilai.php');
?>