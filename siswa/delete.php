<?php

    mysqli_query($koneksi, "DELETE FROM data_siswa where id_siswa='$_GET[id]'");

    header('Location: ?page=siswa');
?>