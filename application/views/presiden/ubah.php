<div id="main">
	<div class="page-heading">
		<h3>Halaman Edit Presiden</h3>
	</div>

	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Edit Data</h4>
		</div>
		<div class="card-content">
			<div class="card-body">
				<form method="POST" action="<?= base_url('Presiden/update') ?>" class="form form-horizontal">
					<div class="form-body">
						<div class="row">
							<input type="text" value="<?= $presiden['id'] ?>" name="id" hidden>
							<div class="col-md-4">
								<label>Nama</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= $presiden['nama'] ?>" class="form-control"
									name="nama" placeholder="Prodi">
							</div>
							<div class="col-md-4">
								<label>NIK</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= $presiden['nik'] ?>" class="form-control"
									name="nik" placeholder="Ruangan">
							</div>
							<div class="col-md-4">
								<label>Asal</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="password" value="<?= $presiden['asal'] ?>" class="form-control"
									name="asal" placeholder="Jurusan">
							</div>
							<div class="col-md-4">
								<label>Partai Pendukung</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="password" value="<?= $presiden['partai'] ?>"
									class="form-control" name="partai" placeholder="Akreditasi">
							</div>
							<div class="col-md-4">
								<label>Riwayat Pekerjaan</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= $presiden['riwayat'] ?>" class="form-control"
									name="riwayat" placeholder="Nama Kaprodi">
							</div>
							<div class="col-md-4">
								<label>Umur</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= $presiden['umur'] ?>"
									class="form-control" name="umur" placeholder="tahun">
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

