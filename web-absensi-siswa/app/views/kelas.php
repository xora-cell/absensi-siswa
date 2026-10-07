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
                    <h1 class="mt-4">Kelas</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="<?= URL_UTAMA ?>/dashboard">Dashboard</a></li>
                        <li class="breadcrumb-item active">Kelas</li>
                    </ol>

                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data Kelas
                        </div>
                        <div class="card-body">

                            <a href="<?= URL_UTAMA ?>/kelas/kelas_add" class="btn btn-primary mb-3">Tambah Kelas</a>

                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kelas</th>
                                        <th>Kompetensi Keahlian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data['kelas'] as $kelas) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $kelas['nama_kelas']; ?></td>
                                            <td><?= $kelas['kompetensi_keahlian']; ?></td>
                                            <td>
                                                <a href="<?= URL_UTAMA ?>/kelas/kelas_edit/<?= $kelas['id_kelas']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                                <form action="<?= URL_UTAMA ?>/kelas/kelas_delete/<?= $kelas['id_kelas']; ?>" method="POST" style="display: inline;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kelas ini?')">Hapus</button>
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
        include 'partials/script.php';
    ?>
    
    </body>
</html>