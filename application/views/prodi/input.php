<div id="main">
	<div class="page-heading">
		<h3>Halaman Tambah Prodi</h3>
	</div>

	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Masukkan Data</h4>
		</div>
		<div class="card-content">
			<div class="card-body">
				<form method="POST" action="" class="form form-horizontal" enctype="multipart/form-data">
					<div class="form-body">
						<div class="row">
							<div class="col-md-4">
								<label>Prodi</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" class="form-control" name="prodi" placeholder="Prodi">
								<?= form_error('prodi', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Ruangan</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" class="form-control" name="ruangan" placeholder="Ruangan">
								<?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Jurusan</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="password" class="form-control" name="jurusan"
									placeholder="Jurusan">
								<?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Akreditasi</label>
							</div>
							<div class="col-md-8 form-group">
								<select name="akreditasi" id="" class="form-control">
									<option value="" selected disabled>Akreditasi</option>
									<option value="A">A</option>
									<option value="B">B</option>
									<option value="C">C</option>
									<option value="D">D</option>
								</select>
								<?= form_error('akreditasi', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Nama Kaprodi</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" class="form-control" name="kaprodi"
									placeholder="Nama Kaprodi">
								<?= form_error('kaprodi', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Tahun Berdiri</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" class="form-control"name="tahun" placeholder="tahun">
								<?= form_error('tahun', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Output Lulusan</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" class="form-control" name="lulusan"
									placeholder="Output Lulusan">
								<?= form_error('lulusan', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Gambar</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="file" id="email-id" class="form-control" name="gambar"
									placeholder="Gambar">								
							</div>
							<div class="col-sm-12 d-flex justify-content-end">
								<a href="<?= base_url() ?>Prodi/prodi"
									class="btn btn-secondary me-1 mb-1">Kembali</a>
								<button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
