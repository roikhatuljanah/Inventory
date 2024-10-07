<?= $this->extend('template/templateview') ?>

<?= $this->section('title') ?>
Data Dosen
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <a class="btn btn-success" href="<?= base_url('/dosen/tambahdatadsn') ?>">Tambah Data</a>
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
            foreach ($datadosen as $row) :
            ?>
                <tr>
                    <td><?= $nomor++; ?></td>
                    <td><?= $row['dsnnama'] ?></td>
                    <td><?= $row['dsnnim'] ?></td>
                    <td><?= $row['dsntempatlahir'] ?><span>, </span> <?= $row['dsntanggallahir'] ?></td>
                    <td><?= $row['dsnjeniskelamin'] ?></td>
                    <td><?= $row['dsnalamat'] ?></td>
                    <td><?= $row['dsntelp'] ?></td>
                    <td>
                        <a class="btn btn-warning" href="<?= base_url('/dosen/editdsn/' . $row['dsnnim']) ?>">Edit</a>
                        <a class="btn btn-danger" href="<?= base_url('/dosen/hapusdsn/' . $row['dsnnim']) ?>">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
