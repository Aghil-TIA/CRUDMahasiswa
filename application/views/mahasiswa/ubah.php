<div id="main">
	<div class="page-heading">
		<h3>Halaman Edit Mahasiswa</h3>
	</div>

	<div class="card">
		<div class="card-header">
			<h4 class="card-title">Edit Data</h4>
		</div>
		<div class="card-content">
			<div class="card-body">
				<form method="POST" action="" class="form form-horizontal">
					<div class="form-body">
						<div class="row">
							<input type="text" name="id" value="<?= $mahasiswa['id'] ?>" hidden>
							<div class="col-md-4">
								<label>Nama</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="first-name" value="<?= $mahasiswa['nama'] ?>" class="form-control" name="nama" placeholder="Nama">
								<?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>NIM</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= $mahasiswa['nim'] ?>" class="form-control" name="nim" placeholder="NIM">
								<?= form_error('nim', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Jenis Kelamin</label>
							</div>
							<div class="col-md-8 form-group">
								<select name="jenisKelamin" value="<?= $mahasiswa['jenisKelamin'] ?>" class="form-control" id="">
									<option value="Laki-laki" <?php
																if ($mahasiswa['jenisKelamin'] == "Laki-Laki") {
																	echo "selected";
																}
																?>>Laki-Laki</option>
									<option value="Perempuan" <?php
																if ($mahasiswa['jenisKelamin'] == "Perempuan") {
																	echo "selected";
																}
																?>>Perempuan</option>
								</select>
								<?= form_error('jenisKelamin', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Email</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="email" id="email" value="<?= $mahasiswa['email'] ?>" class="form-control" name="email" placeholder="Email">
								<?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Pilih Prodi</label>
							</div>
							<div class="col-md-8 form-group">
								<select name="prodi" value="<?= $mahasiswa['prodi'] ?>" class="form-control" id="">
									<?php foreach ($prodi as $p) : ?>
										<option value="<?= $p['id'] ?>" <?php if ($mahasiswa['prodi'] == $p['id']) {
																			echo "selected";
																		} ?>><?= $p['namaProdi'] ?>
										</option>
									<?php endforeach; ?>
								</select>
								<?= form_error('prodi', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Asal Sekolah</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="email-id" value="<?= $mahasiswa['asalSekolah'] ?>" class="form-control" name="asalSekolah" placeholder="Asal Sekolah">
								<?= form_error('asalSekolah', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>No HP</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="number" id="" value="<?= $mahasiswa['noHp'] ?>" class="form-control" name="noHp" placeholder="No HP">
								<?= form_error('noHp', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-md-4">
								<label>Alamat</label>
							</div>
							<div class="col-md-8 form-group">
								<input type="text" id="" value="<?= $mahasiswa['alamat'] ?>" class="form-control" name="alamat" placeholder="Alamat">
								<?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
							</div>
							<div class="col-sm-12 d-flex justify-content-end">
								<a href="<?= base_url() ?>Mahasiswa/mahasiswa" class="btn btn-secondary me-1 mb-1">Kembali</a>
								<button type="submit" class="btn btn-primary me-1 mb-1">Simpan</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>