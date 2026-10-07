<?php
/** @var array $data */
?>

<!DOCTYPE html>
<html lang="en">
    <?php 
        include 'partials/header.php';
    ?>    

    <body class="sb-nav-fixed">
        
        <?php 
            include 'partials/navbar.php';
        ?>

        <div id="layoutSidenav">

            <?php 
                include 'partials/sidebar.php';
            ?>
            
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
                        <h1 class="mt-4">ABSENSI SEKOLAH</h1>

                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>

                        <!-- Card -->
                        <div class="row justify-content-center">

    <!-- Absensi -->
    <div class="col-xl-6 col-md-5">
        <div class="card  text-white mb-4" style="background-color: #00B5B5;">
            <div class="card-body">
                Absensi | <?= $data['dataAbsensi']; ?>
            </div>
                
        </div>
    </div>

    <!-- Kelas -->
    <div class="col-xl-6 col-md-5">
        <div class="card  text-white mb-4" style="background-color: #00B5B5;">
            <div class="card-body">
                Kelas | <?= $data['dataKelas']; ?>
            </div>

           
        </div>
    </div>

</div>
                        <!-- End Card -->

                    </div>

                     <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Rekap Absensi Siswa
                            </div>
                          <div class="card mb-4">
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>NIS</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Keterangan</th>
                </tr>
            </thead>

            <tbody>
                <tr>
        <td>10001</td>
    <td>Alfin Zeta</td>
    <td>XII RPL</td>
    <td>2026/09/23</td>
    <td>Hadir</td>
    <td>-</td>
</tr>

<tr>
    <td>10002</td>
    <td>M Hauzan</td>
    <td>XII RPL</td>
    <td>2026/09/23</td>
    <td>Hadir</td>
    <td>-</td>
</tr>

<tr>
    <td>10003</td>
    <td>Ravael</td>
    <td>XII RPL</td>
    <td>2026/09/23</td>
    <td>Izin</td>
    <td>Keperluan keluarga</td>
</tr>

<tr>
    <td>10004</td>
    <td>Zahara Tira</td>
    <td>XII RPL</td>
    <td>2026/09/23</td>
    <td>Hadir</td>
    <td>-</td>
</tr>

<tr>
    <td>10005</td>
    <td>Yoga</td>
    <td>XII RPL</td>
    <td>2026/09/23</td>
    <td>Sakit</td>
    <td>Demam</td>
</tr>

<tr>
    <td>10006</td>
    <td>Tarafan</td>
    <td>XII RPL</td>
    <td>2026/09/23</td>
    <td>Hadir</td>
    <td>-</td>
</tr>

<tr>
    <td>10007</td>
    <td>Fizi</td>
    <td>XII RPL</td>
    <td>2026/09/23</td>
    <td>Alpa</td>
    <td>-</td>
</tr>

<tr>
    <td>10008</td>
    <td>Roki</td>
    <td>XII RPL</td>
    <td>2026/09/23</td>
    <td>Hadir</td>
    <td>-</td>
</tr>

<tr>
    <td>10009</td>
    <td>Tristan</td>
    <td>XII RPL</td>
    <td>2026/09/23</td>
    <td>Hadir</td>
    <td>-</td>
</tr>

<tr>
    <td>10010</td>
    <td>Alfian</td>
    <td>XII RPL</td>
    <td>2026/09/23</td>
    <td>Izin</td>
    <td>Acara keluarga</td>
</tr>
            </tbody>
        </table>
    </div>
  </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
                           </div>
        </main>

        <?php 
            include 'partials/footer.php';
        ?>

    </div>
</div>

<?php 
    include 'partials/script.php';
?>
</html>