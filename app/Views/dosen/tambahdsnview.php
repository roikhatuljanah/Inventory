<?= $this->extend('template/templateview') ?>

<?= $this->section('title') ?>
Tambah Data Dosen
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <a class="btn btn-warning" href="<?=base_url('/dosen/index')?>">Kembali</a>
    <hr>
    <a href="<?= base_url('/dosen/tambahdatadsn') ?>" class="btn btn-success mb-2">Tambah Data</a>
    <form method="post" action="<?= base_url('dosen/simpandatadsn'); ?>">
        <div class="mb-3 row">
            <label for="dsnnim" class="col-sm-3 col-form-label">NIDN</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="dsnnim" id="dsnnim" placeholder="Nidn" autofocus>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="dsnnama" class="col-sm-3 col-form-label">Nama</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="dsnnama" id="dsnnama" placeholder="Nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="dsntempatlahir" class="col-sm-3 col-form-label">Tempat / Tanggal Lahir</label>
            <div class="col-sm-5">
                <input class="form-control" type="text" name="dsntempatlahir" id="dsntempatlahir" placeholder="Tempat Lahir">
            </div>
            <div class="col-sm-4">
                <input class="form-control" type="date" name="dsntanggallahir" id="dsntanggallahir">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="dsnjeniskelamin" class="col-sm-3 col-form-label">Jenis Kelamin</label>
            <div class="col-sm-9">
                <input class="form-check-input" type="radio" name="dsnjeniskelamin" value="L"> Laki-laki
                <input class="form-check-input" type="radio" name="dsnjeniskelamin" value="P"> Perempuan
            </div>
        </div>
        <div class="mb-3 row">
            <label for="dsnalamat" class="col-sm-3 col-form-label">Alamat</label>
            <div class="col-sm-9">
                <textarea class="form-control" name="dsnalamat" id="dsnalamat" cols="30" rows="5" placeholder="Alamat"></textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="dsntelp" class="col-sm-3 col-form-label">No Telp</label>
            <div class="col-sm-9">
                <input class="form-control" type="text" name="dsntelp" id="dsntelp" placeholder="No Telepon">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-3"></div>
            <div class="col-sm-9">
                <button type="submit" class="btn btn-success form-control">Simpan Data</button>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection() ?>
