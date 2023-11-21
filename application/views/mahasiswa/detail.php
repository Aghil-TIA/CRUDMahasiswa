<div id="main">
	<div class="page-heading">
		<h3>Halaman Detail Mahasiswa</h3>
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="card">
				<div class="card-content">
					<div class="card-body">
						<h2 class="card-subtitle mb-2"><?= $mahasiswa['nama'] ?></h2>
						<h6 class="card-subtitle mb-2 text-muted"><?= $mahasiswa['email'] ?></h6>
						<div class="row">
							<div class="col-md-4">NIM</div>
							<div class="col-md-2">:</div>
							<div class="col-md-6"><?= $mahasiswa['nim'] ?></div>
						</div>
						<div class="row">
							<div class="col-md-4">Jenis Kelamin</div>
							<div class="col-md-2">:</div>
							<div class="col-md-6"><?= $mahasiswa['jenisKelamin'] ?></div>
						</div>
						<div class="row">
							<div class="col-md-4">Prodi</div>
							<div class="col-md-2">:</div>
							<div class="col-md-6"><?= $mahasiswa['prodi'] ?></div>
						</div>
						<div class="row">
							<div class="col-md-4">Asal Sekolah</div>
							<div class="col-md-2">:</div>
							<div class="col-md-6"><?= $mahasiswa['asalSekolah'] ?></div>
						</div>
						<div class="row">
							<div class="col-md-4">No HP</div>
							<div class="col-md-2">:</div>
							<div class="col-md-6"><?= $mahasiswa['noHp'] ?></div>
						</div>
						<div class="row">
							<div class="col-md-4">Alamat</div>
							<div class="col-md-2">:</div>
							<div class="col-md-6"><?= $mahasiswa['alamat'] ?></div>
						</div>
					</div>
				</div>
				<div class="d-flex justify-content-between">
					<a href="<?= base_url() ?>Mahasiswa/mahasiswa" style="margin-left:2%; margin-bottom:2%;" class="btn btn-secondary">Kembali</a>
				</div>
			</div>
		</div>
	</div>
</div>