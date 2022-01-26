<?php

 include "../config.php";


 for($i=0; $i < 10; $i++){
  $input_nilai = rand(10, 100);

  mysqli_query($koneksi, "INSERT INTO data_nilai (input_nilai) VALUE ('$input_nilai')");
 }

 header('Location: ../nilai/nilai.php');
?>