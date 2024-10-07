<?= $this->extend('template/templateview') ?>

<?= $this->section('title') ?>
Tambah Data
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="mhsnim" placeholder="Masukkan NIM" autofocus>
        </div>
    </div>

    <div class="mb-3 row">
        <label class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="mhsnama" placeholder="Masukkan Nama">
        </div>
    </div>
</div>
<?= $this->endSection() ?>