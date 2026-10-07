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
                    <h1 class="mt-4">Edit Data Absensi</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= URL_UTAMA ?>/absensi">Absensi</a></li>
                        <li class="breadcrumb-item active">Edit Data Absensi</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            Silahkan ubah data absensi dengan benar.
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Form Edit Data Absensi
                        </div>
                        <div class="card-body">
                            <form action="<?= URL_UTAMA ?>/absensi/edit/<?= $data['id'] ?>" method="POST" enctype="multipart/form-data">
                                <input type="hidden" name="_method" value="PUT">
                                <div class="mb-3">
                                    <label for="nama_siswa" class="form-label">Nama Siswa</label>
                                    <input type="text" name="nama_siswa" id="nama_siswa" class="form-control" value="<?= $data['nama_siswa'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="tanggal_absen" class="form-label">Tanggal Absen</label>
                                    <input type="date" name="tanggal_absen" id="tanggal_absen" class="form-control" value="<?= $data['tanggal_absen'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="status_absen" class="form-label">Status Absen</label>
                                    <select name="status_absen" id="status_absen" class="form-select" required>
                                        <option value="">Pilih Status Absen</option>
                                        <option value="Hadir" <?= $data['status_absen'] == 'Hadir' ? 'selected' : '' ?>>Hadir</option>
                                        <option value="Sakit" <?= $data['status_absen'] == 'Sakit' ? 'selected' : '' ?>>Sakit</option>
                                        <option value="Izin" <?= $data['status_absen'] == 'Izin' ? 'selected' : '' ?>>Izin</option>
                                        <option value="Alpa" <?= $data['status_absen'] == 'Alpa' ? 'selected' : '' ?>>Alpa</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="<?= URL_UTAMA ?>/absensi" class="btn btn-secondary">Batal</a>
                            </form>
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