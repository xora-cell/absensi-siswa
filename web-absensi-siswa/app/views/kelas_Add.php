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
                    <h1 class="mt-4">Tambah Data Kelas</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= URL_UTAMA ?>/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="<?= URL_UTAMA ?>/kelas">Kelas</a></li>
                        <li class="breadcrumb-item active">Tambah Kelas</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-plus me-1"></i>
                            Tambah Data Kelas
                        </div>
                        <div class="card-body">

                            <form method="post" action="<?= URL_UTAMA ?>/kelas/kelas_add_process">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="nama_kelas" type="text" placeholder="Nama Kelas" name="nama_kelas" />
                                    <label for="nama_kelas">Nama Kelas</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="kompetensi_keahlian" type="text" placeholder="Kompetensi Keahlian" name="kompetensi_keahlian" />
                                    <label for="kompetensi_keahlian">Kompetensi Keahlian</label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Tambah Kelas</button>
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