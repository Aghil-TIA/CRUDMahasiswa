<div id="main">
    <div class="page-heading">
        <h3>Profile</h3>
    </div>
    <div class="container-fluid">
        <div class="card mb-3" style="max-width:540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="<?= base_url() ?>assets/images/logo/<?= $user['gambar'] ?>" class="card-img" alt="">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?= $user['nama'] ?></h5>
                        <p class="card-text"><?= $user['email'] ?></p>
                        <p class="card-text"><small class="text-muted">Anggota Sejak <?= date('d F Y', $user['date_created']) ?> </small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>