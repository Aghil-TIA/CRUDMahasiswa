<div id="main">
	<div class="page-heading">
		<h3>Halaman Tambah Presiden</h3>
	</div>

	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Masukkan Data</h4>
		</div>
		<div class="card-content">
			<div class="card-body">
				<form method="POST" action="<?= base_url('Presiden/upload') ?>" class="form form-horizontal">
					<div class="form-body">
						<div class="row">
							<div class="col-md-4">
								<label>Nama Lengkap</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" class="form-control" name="nama" placeholder="Nama Lengkap">
							</div>
							<div class="col-md-4">
								<label>NIK</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" class="form-control" name="nik"
									placeholder="NIK">
							</div>
							<div class="col-md-4">
								<label>Asal</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" class="form-control" name="asal" placeholder="Asal">
							</div>
							<div class="col-md-4">
								<label>Partai Pendukung</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" class="form-control" name="partai" placeholder="Partai Pendukung">
							</div>
							<div class="col-md-4">
								<label>Riwayat Pekerjaan</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" class="form-control" name="riwayat" placeholder="Riwayat Pekerjaan">
							</div>
							<div class="col-md-4">
								<label>Umur</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" class="form-control" name="umur" placeholder="Umur">
							</div>
							<div class="col-sm-12 d-flex justify-content-end">
								<a href="<?= base_url() ?>Presiden/index" class="btn btn-secondary me-1 mb-1">Kembali</a>
								<button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
