<div id="main">
    <div class="page-heading">
        <h3>Halaman Detail Data Karyawan</h3>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                    <img src="<?= base_url('assets/images/foto/').$data['gambar'] ?>" style="width:200px;" class="rounded-circle" alt="">
                        <h2 class="card-subtitle mb-2"><?= $data['nama'] ?></h2>
                        <h6 class="card-subtitle mb-2 text-muted"><?= $data['email'] ?></h6>
                        <div class="row">
                            <div class="col-md-4">Tempat Lahir</div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-2"><?= $data['tempatLahir'] ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">Tanggal Lahir</div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-2"><?= $data['tanggalLahir'] ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">Jenis Kelamin</div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-2"><?= $data['jenisKelamin'] ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">Agama</div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-2"><?= $data['agama'] ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">No HP</div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-2"><?= $data['noHp'] ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">Kota</div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-2"><?= $data['kota'] ?></div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">Negara</div>
                            <div class="col-md-1">:</div>
                            <div class="col-md-2"><?= $data['negara'] ?></div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <a href="<?= base_url() ?>Data/index" style="margin-left:2%; margin-bottom:2%;" class="btn btn-secondary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>