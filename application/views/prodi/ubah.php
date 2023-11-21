<div id="main">
	<div class="page-heading">
		<h3>Halaman Edit Prodi</h3>
	</div>

	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Edit Data</h4>
		</div>
		<div class="card-content">
			<div class="card-body">
				<form method="POST" action="" class="form form-horizontal" enctype="multipart/form-data">
					<div class="form-body">
						<div class="row">
							<input type="text" name="id" value="<?= $prodi['id'] ?>" hidden>
							<div class="col-md-4">
								<label>Prodi</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= $prodi['namaProdi'] ?>" class="form-control"
									name="prodi" placeholder="Prodi">
								<?= form_error('prodi', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Ruangan</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= $prodi['ruangan'] ?>" class="form-control"
									name="ruangan" placeholder="Ruangan">
								<?= form_error('prodi', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Jurusan</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="password" value="<?= $prodi['jurusan'] ?>" class="form-control"
									name="jurusan" placeholder="Jurusan">
							</div>
							<div class="col-md-4">
								<label>Akreditasi</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="password" value="<?= $prodi['akreditasi'] ?>"
									class="form-control" name="akreditasi" placeholder="Akreditasi">
							</div>
							<div class="col-md-4">
								<label>Nama Kaprodi</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= $prodi['nama'] ?>" class="form-control"
									name="kaprodi" placeholder="Nama Kaprodi">
							</div>
							<div class="col-md-4">
								<label>Tahun Berdiri</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= $prodi['tahunBerdiri'] ?>"
									class="form-control" name="tahun" placeholder="tahun">
							</div>
							<div class="col-md-4">
								<label>Output Lulusan</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= $prodi['outputLulusan'] ?>"
									class="form-control" name="lulusan" placeholder="Output Lulusan">
							</div>
							<div class="col-md-4">
								<label>Gambar</label>
							</div>
							<div class="col-md-8 form-group">
								<img src="<?= base_url('assets/images/img/'). $prodi['gambar'] ?>" style="width:100px;" class="img-thumbnail" alt="">
								<input type="file" class="form-control" name="gambar" placeholder="Choose File">
							</div>
							<div class="col-sm-12 d-flex justify-content-end">
								<a href="<?= base_url() ?>Prodi/prodi" class="btn btn-secondary me-1 mb-1">Kembali</a>
								<button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
