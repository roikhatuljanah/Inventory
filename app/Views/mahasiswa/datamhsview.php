<?= $this->extend('template/templateview') ?>

<?= $this->section('title') ?>
Data Mahasiswa
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <a class="btn btn-success" href="<?= site_url('/mahasiswa/tambahdatamhs') ?>">Tambah Data</a>
    <hr>
    <table class="table-bordered table table-hover">
        <thead class="text-center">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Tempat / Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>No Telp</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            foreach ($datamahasiswa as $row) :
            ?>
                <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $row['mhsnim'] ?></td>
                    <td><?= $row['mhsnama'] ?></td>
                    <td><?= $row['mhstempatlahir'] ?><span>, </span> <?= $row['mhstanggallahir'] ?></td>
                    <td><?= $row['mhsjeniskelamin'] ?></td>
                    <td><?= $row['mhsalamat'] ?></td>
                    <td><?= $row['mhstelp'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="">Edit</a>
                        <a class="btn btn-danger" href="">Hapus</a>
                    </td>
                </tr>


            <?php endforeach ?>

        </tbody>

    </table>
</div>
<?= $this->endSection() ?>