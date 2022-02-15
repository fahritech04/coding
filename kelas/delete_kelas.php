<?php
    mysqli_query($koneksi, "DELETE FROM data_kelas where id='$_GET[id]'");

    header('Location: ?page=kelas');
?>