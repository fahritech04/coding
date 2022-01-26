<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Data Siswa</title>

    <!-- CDN Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body class="container">
    <h2 class="text-center bg-warning py-2">DATA NILAI</h2>
    
    <?php
        
        include "../config.php";
        $query  = mysqli_query($koneksi, "SELECT * FROM data_nilai");
        $jumlah = mysqli_num_rows($query);

        ?>
        <a href="../siswa/index.php"  class="btn btn-danger">Data Siswa</a>
        <a href="../kelas/kelas.php"  class="btn btn-warning">Kelas</a>
        <div class="mt-3 mb-2">
            <a href="../nilai/input_nilai.php" class="btn btn-primary">Input Nilai</a>
        </div>
        
        <table class="table table-striped table-dark">
            <thread class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Nilai</th>
                    <th>Status</th>
                </tr>
            </thread>
            <?php   $no         = 1; 
                    $batas      = 5;
                    $halaman    = @$_GET['halaman'];
                        if(empty($halaman)){
                            $posisi     = 0;
                            $halaman    = 1;
                        }else {
                            $posisi     = ($halaman-1) * $batas;
                        }
                    
                    $no     = $posisi + 1;
                    $sql    = "select * from data_nilai limit $posisi,$batas";
                    $hasil  = mysqli_query($koneksi, $sql);

                    while($data = mysqli_fetch_object($hasil))
                
            { ?>
                <tbody>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data->id_siswa ?></td>
                        <td><?= $data->input_nilai ?></td>               
                        <td><?php
                         if($data->input_nilai < 75){
                          echo "<span class='badge bg-danger'>Tidak Tuntas</span>";
                         }else {
                          echo "<span class='badge bg-primary'>Tuntas</span>";
                         }
                        ?></td>               
                    </tr>
                </tbody>
            <?php 
            } ?>
        </table>

        <!-- Jumlah Data Table -->
        <p>Jumlah Data nilai : <b><?php echo $jumlah; ?></b></p>

        <!-- pagination -->
        <?php
        
        $jmlnilai       = mysqli_num_rows($query);
        $jmlhalaman     = ceil($jmlnilai/$batas);        
        ?>

        <div class="text-center">
            <ul class="pagination">
                <?php
                    for($i=1; $i<=$jmlhalaman; $i++){
                        if($i != $halaman){
                            echo "<li class='page-item'><a class='page-link' href='nilai.php?halaman=$i'>$i</a></li>";
                        }else {
                            echo "<li class='page-item active'><a class='page-link' href='#'>$i</a></li>";
                        }
                    }
                ?>
            </ul>
        </div>

</body>

</html>