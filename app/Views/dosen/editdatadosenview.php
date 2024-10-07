<?= $this->extend('template/templateview') ?>

<?= $this->section('title') ?>
Edit Data Dosen
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <a class="btn btn-warning" href="<?= base_url('/dosen/index') ?>">Kembali</a>
    <hr>
    <div class="card-header bg-info text-white">
        <h4 class="card-title">Edit Dosen: <?= isset($dosen['dsnnim']) ? $dosen['dsnnim'] : ''; ?></h4>
    </div>
    <hr>
    <form method="post" action="<?= base_url('dosen/updatedsn') ?>">
        <div class="mb-3 row">
            <label for="dsnnama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="dsnnama" id="dsnnama" placeholder="Nama" value="<?= isset($dosen['dsnnama']) ? $dosen['dsnnama'] : ''; ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="dsntempatlahir" class="col-sm-3 col-form-label">Tempat / Tanggal Lahir</label>
            <div class="col-sm-5">
                <input class="form-control" type="text" name="dsntempatlahir" id="dsntempatlahir" placeholder="Tempat Lahir" value="<?= isset($dosen['dsntempatlahir']) ? $dosen['dsntempatlahir'] : ''; ?>">
            </div>
            <div class="col-sm-4">
                <input class="form-control" type="date" name="dsntanggallahir" id="dsntanggallahir" value="<?= isset($dosen['dsntanggallahir']) ? $dosen['dsntanggallahir'] : ''; ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="dsnjeniskelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-9">
                <input class="form-check-input" type="radio" name="dsnjeniskelamin" value="L" <?php if (isset($dosen['dsnjeniskelamin']) && $dosen['dsnjeniskelamin'] == 'L') echo 'checked'; ?>> Laki-laki
                <input class="form-check-input" type="radio" name="dsnjeniskelamin" value="P" <?php if (isset($dosen['dsnjeniskelamin']) && $dosen['dsnjeniskelamin'] == 'P') echo 'checked'; ?>> Perempuan
            </div>
        </div>
        <div class="mb-3 row">
            <label for="dsnalamat" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-9">
                <textarea class="form-control" name="dsnalamat" id="dsnalamat" cols="30" rows="5" placeholder="Alamat"><?= isset($dosen['dsnalamat']) ? $dosen['dsnalamat'] : ''; ?></textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="dsnnotelp" class="col-sm-3 col-form-label">No Telp</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="dsntelp" id="dsntelp" placeholder="No Telepon" value="<?= isset($dosen['dsntelp']) ? $dosen['dsntelp'] : ''; ?>">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <button type="submit" class="btn btn-success form-control">Update Data</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
