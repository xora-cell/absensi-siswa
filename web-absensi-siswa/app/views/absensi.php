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
                <h1 class="mt-4">Data Absensi</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Absensi</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">
                        Berikut adalah data absensi siswa.
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        Data Absensi
                    </div>
                    <div class="card-body">
                        <a href="<?= URL_UTAMA ?>/absensi/add" class="btn btn-primary mb-3">Tambah Data Absensi</a>
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Tanggal Absen</th>
                                    <th>Status Absen</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; ?>
                                <?php foreach ($data['absensi'] as $absensi) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $absensi['nama_siswa']; ?></td>
                                        <td><?= $absensi['tanggal_absen']; ?></td>
                                        <td><?= $absensi['status_absen']; ?></td>
                                        <td>
                                            <a href="<?= URL_UTAMA ?>/absensi/edit/<?= $absensi['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                            <form action="<?= URL_UTAMA ?>/absensi/delete/<?= $absensi['id']; ?>" method="POST" style="display:inline;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>   
                </div> 
            </div>
        </main>
            <?php
            include 'partials/footer.php';
            ?>
    
        </div>
    </div>
    <?php
        include 'partials/scripts.php';
    ?>
    </body>
</html>