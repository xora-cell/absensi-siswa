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
                <div class="container-fluid-px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Tambah Absensi</li>
                    </ol>
                    <div class="row">
                        <div class="col">
                            <form method="post" action="<?= URL_UTAMA ?>/absensi/absensi_add_process">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="nama_siswa" type="text" placeholder="Nama Siswa" name="nama_siswa" />
                                    <label for="nama_siswa">Nama Siswa</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="tanggal_absen" type="date" placeholder="Tanggal Absen" name="tanggal_absen" />
                                    <label for="tanggal_absen">Tanggal Absen</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <select class="form-select" id="status_absen" name="status_absen">
                                        <option value="">Pilih Status Absen</option>
                                        <option value="Hadir">Hadir</option>
                                        <option value="Sakit">Sakit</option>
                                        <option value="Izin">Izin</option>
                                        <option value="Alpa">Alpa</option>
                                    </select>
                                    <label for="status_absen">Status Absen</label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Tambah Absensi</button>
                                </div>
                            </div>
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
        include 'partials/script.php';
    ?>
</body>
</html>